<?php

use App\Tracker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\URL;

class TrackerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //week 1
        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 1,

        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/2.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 2,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/3.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 3,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/4.jpg',
            'type' => "line",
           
            'week' => 1,
            'days' => 4,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/5.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 5,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/6.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 6,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'body' => "A mother's due date marks the end of her 40th week. The delivery date is calculated using the first day of her last period. Based on this, pregnancy can last between 38 and 42 weeks with a full-term delivery happening around 40 weeks. Some post-term pregnancies -- those lasting more than 42 weeks -- are not really late. The due date may just not be accurate. For safety reasons, most babies are delivered by 42 weeks. Sometimes the doctor may need to induce labor.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/7.jpg',
            'type' => "line",
            
            'week' => 1,
            'days' => 7,
        ]);

        Tracker::create([
            'title' => "Your baby's growth: Conception to birth",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 1,
            'days' => 1,
        ]);

        //week 2...

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/8.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 8,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/9.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 9,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/10.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 10,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/11.jpg',
            'type' => "line",
           
            'week' => 2,
            'days' => 11,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/12.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 12,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/13.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 13,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'body' => "Fertilization happens when a sperm meets and penetrates an egg. It's also called conception. At this moment, the genetic makeup is complete, including the sex of baby. Within about three days after conception, the fertilized egg is dividing very fast into many cells. It passes through the fallopian tube into the uterus, where it attaches to the uterine wall. The placenta, which will nourish the baby, also starts to form.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 2,
            'days' => 14,
        ]);

        Tracker::create([
            'title' => "Conception",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 2,
            'days' => 8,
        ]);

        ///week 3
        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 15,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/2.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 16,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/3.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 17,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/4.jpg',
            'type' => "line",
           
            'week' => 3,
            'days' => 18,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/5.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 19,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/6.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 20,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'body' => "At this point the baby is developing the structures that will eventually form his face and neck. The heart and blood vessels continue to develop. And the lungs, stomach, the liver start to develop. A home pregnancy test would show positive",
            'media' => 'http://127.0.0.1:8000/storage/trackers/7.jpg',
            'type' => "line",
            
            'week' => 3,
            'days' => 21,
        ]);

        Tracker::create([
            'title' => "Development at 3 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 3,
            'days' => 15,
        ]);

        //week 4

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/8.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 22,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/9.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 23,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/10.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 24,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/11.jpg',
            'type' => "line",
           
            'week' => 4,
            'days' => 25,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/12.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 26,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/13.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 27,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby is now a little over half an inch in size. Eyelids and ears are forming, and you can see the tip of the nose. The arms and legs are well formed. The fingers and toes grow longer and more distinct.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 4,
            'days' => 28,
        ]);

        Tracker::create([
            'title' => "Development at 4 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 4,
            'days' => 22,
        ]);

        //week 5

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 29,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/2.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 30,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/3.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 31,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/4.jpg',
            'type' => "line",
           
            'week' => 5,
            'days' => 32,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/5.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 33,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/6.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 34,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby measures about 2 inches and starts to make its own movements. you may start to feel the top of your uterus above your pubic bone. Your doctor may hear the baby's heartbeat with special instruments. The sex organs of the baby should start to become clear.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/7.jpg',
            'type' => "line",
            
            'week' => 5,
            'days' => 35,
        ]);

        Tracker::create([
            'title' => "Development at 12 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 5,
            'days' => 29,
        ]);

        //week 6
        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/8.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 36,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/9.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 37,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/10.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 38,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/11.jpg',
            'type' => "line",
           
            'week' => 6,
            'days' => 39,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/12.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 40,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/13.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 41,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby now measures about 4.3 to 4.6 inches and weighs about 3.5 ounces. You should be able to feel the top of your uterus about 3 inches below your belly button. The baby's eyes can blink and the heart and blood vessels are fully formed. The baby's fingers and toes have fingerprints.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 6,
            'days' => 42,
        ]);

        Tracker::create([
            'title' => "Development at 6 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 6,
            'days' => 36,
        ]);

        ///week 7
        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 43,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/2.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 44,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/3.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 45,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/4.jpg',
            'type' => "line",
           
            'week' => 7,
            'days' => 46,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/5.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 47,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/6.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 48,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 10 ounces and is a little more than 6 inches long. Your uterus should be at the level of your belly button. The baby can suck a thumb, yawn, stretch, and make faces. Soon -- if you haven't already -- you'll feel your baby move, which is called 'quickening'.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/7.jpg',
            'type' => "line",
            
            'week' => 7,
            'days' => 49,
        ]);

        Tracker::create([
            'title' => "Development at 7 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 7,
            'days' => 43,
        ]);

        //week 8
        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/8.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 50,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/9.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 51,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/10.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 52,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/11.jpg',
            'type' => "line",
           
            'week' => 8,
            'days' => 53,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/12.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 54,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/13.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 55,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 8,
            'days' => 56,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 8,
            'days' => 50,
        ]);
        //week 9
        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 57,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/2.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 58,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/3.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 59,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/4.jpg',
            'type' => "line",
           
            'week' => 9,
            'days' => 60,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/5.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 61,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/6.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 62,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'body' => "An ultrasound is usually done for all pregnant women at 20 weeks. During this ultrasound, the doctor will make sure that the placenta is healthy and attached normally and that your baby is growing properly. You can see the baby's heartbeat and movement of its body, arms and legs on the ultrasound. You can usually find out whether it's a boy or a girl at 20 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/7.jpg',
            'type' => "line",
            
            'week' => 9,
            'days' => 63,
        ]);

        Tracker::create([
            'title' => "Time for an Ultrasound",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 9,
            'days' => 57,
        ]);

        //week 10


        Tracker::create([
            'title' => "Development at 10 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/8.jpg',
            'type' => "line",
            
            'week' => 10,

            'days' => 64,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/9.jpg',
            'type' => "line",
            
            'week' => 10,
            'days' => 65,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/10.jpg',
            'type' => "line",
            
            'week' => 10,
            'days' => 66,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/11.jpg',
            'type' => "line",
           
            'week' => 10,
            'days' => 67,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/12.jpg',
            'type' => "line",
            
            'week' => 10,
            'days' => 68,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/13.jpg',
            'type' => "line",
            
            'week' => 10,
            'days' => 69,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'body' => "Babies differ in size, depending on many factors, such as gender, the number of babies being carried, and size of the parents. So your baby's overall rate of growth is as important as the actual size. On average, a baby at this stage is about 18.5 inches and weighs close to 6 pounds. The brain has been developing repidly. Lungs are nearly full developed. The head is usually positioned down into the pelvis by now. Your baby is considered at 'term' when he is 37 weeks. He is an early term baby if born between 37-39 weeks, at term, if he's 39-40 weeks and late term if he's 41-42 weeks.",
            'media' => 'http://127.0.0.1:8000/storage/trackers/1.jpg',
            'type' => "line",
            
            'week' => 10,
            'days' => 70,
        ]);

        Tracker::create([
            'title' => "Development at 8 weeks",
            'subtitle' => "Expert Advice",
            'type' => "checkpoint",
            'week' => 10,
            'days' => 64,
        ]);
    }
}
