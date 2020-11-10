<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 19-Nov-19
 * Time: 17:32
 */
?>

<li class="p-2">
@if(count($menu['children']) > 0)
    <li><i class="fas fa-angle-right rotate"></i> @endif
        <span class="dropdown ">
            {{ $menu['name'] }}
             <a role="button" class=" fa fa-ellipsis-v pl-2 " data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
             </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" data-toggle="modal" data-target="#editMenu" data-menu="{{$menu}}"  >Edit Menu</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#deleteMenu" data-menu="{{$menu}}">Delete Menu</a>
            @if(count($menu['children']) == 0)
                <a class="dropdown-item" data-toggle="modal" data-target="#createMenu" data-menu="{{$menu}}">Create Sub-Menu</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('messages.menu', $menu->id)}}">Manage Message</a>
{{--                @if($menu->message()->get()->first()['id'] == null)--}}
{{--                    <a class="dropdown-item" href="#">Add Message</a>--}}
{{--                @else--}}
{{--                    <a class="dropdown-item" data-toggle="modal" data-target="#viewMessage"--}}
{{--                       data-message="{{$menu->message()->first()->message}}"--}}
{{--                       data-menu="{{$menu->name}}"--}}
{{--                       data-info="{{strlen($menu->message()->first()->message)}} Characters,--}}
{{--                                        {{ intdiv (strlen($menu->message()->get()->first()['message']) ,160 ) + 1  }} sms ">View Message</a>--}}
{{--                    <a class="dropdown-item" data-toggle="modal" data-target="#editMessage"--}}
{{--                       data-message="{{$menu->message()->first()->message}}"--}}
{{--                       data-menu="{{$menu->name}}"--}}
{{--                       data-info="{{strlen($menu->message()->first()->message)}} Characters,--}}
{{--                                        {{ intdiv (strlen($menu->message()->get()->first()['message']) ,160 ) + 1  }} sms ">Edit Message</a>--}}
{{--                @endif--}}
            @endif
        </div>
{{--    </div>--}}
    </span>

        {{--    {{ $menu['name'] }}--}}

        @if (count($menu['children']) > 0)
            <?php $parentMenu = $menu ?>
            <ul class="nested">

                @foreach($menu['children'] as $menu)
                    @include('menu.menu_component', $menu)
                @endforeach
                    <li class="pt-2 text-sm  text-info">
                        <a data-toggle="modal" data-target="#createMenu" data-menu="{{$parentMenu}}">
                            <small>
                                <i class="fas fa-plus mr-2"></i>
                            </small>
                            Add New Menu
                        </a>
                    </li>
            </ul>
        @endif
    </li>
