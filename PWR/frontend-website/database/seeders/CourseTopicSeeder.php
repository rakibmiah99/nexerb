<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $text = "<p>জাভাস্ক্রিপ্ট (JavaScript) হলো একটি <strong>প্রোগ্রামিং ভাষা</strong>, যা মূলত ওয়েব পেজগুলিকে গতিশীল এবং ইন্টারঅ্যাকটিভ করতে ব্যবহৃত হয়। এটি ব্রাউজার-ভিত্তিক প্রোগ্রামিং ভাষা হলেও, বর্তমান সময়ে সার্ভার, মোবাইল অ্যাপ্লিকেশন, এবং গেম ডেভেলপমেন্টেও ব্যবহৃত হচ্ছে।</p><h3>জাভাস্ক্রিপ্টের বৈশিষ্ট্য</h3><ol><li><strong>ইন্টারপ্রেটেড ভাষা:</strong> জাভাস্ক্রিপ্ট সরাসরি ব্রাউজারে চলে, আলাদা কম্পাইলারের প্রয়োজন হয় না।</li><li><strong>ডায়নামিক টাইপড:</strong> ভ্যারিয়েবল ডিক্লেয়ার করার সময় টাইপ নির্ধারণ করতে হয় না।\</li><li><strong>ইভেন্ট-ড্রিভেন:</strong> এটি ব্যবহারকারী বা সিস্টেম থেকে আসা ইভেন্ট (যেমন ক্লিক, কী প্রেস) এর উপর ভিত্তি করে কাজ করতে পারে।</li><li><strong>ক্রস-ব্রাউজার সমর্থন:</strong> জাভাস্ক্রিপ্ট প্রায় সব আধুনিক ব্রাউজারে কাজ করে</li></ol><h3>জাভাস্ক্রিপ্টের প্রধান ব্যবহার</h3><ol><li><strong>ডায়নামিক কন্টেন্ট:</strong> পেজের কন্টেন্ট পরিবর্তন বা অ্যাডজাস্ট করা।</li><li><strong>ইউজার ইন্টারঅ্যাকশন:</strong> ফর্ম ভ্যালিডেশন, মেনু, স্লাইডার, মোডাল ডায়লগ ইত্যাদি।</li><li><strong>ডাটা ম্যানেজমেন্ট:</strong> AJAX ব্যবহার করে সার্ভার থেকে ডেটা নিয়ে আসা এবং দেখানো।</li><li><strong>ওয়েব অ্যাপ্লিকেশন ডেভেলপমেন্ট:</strong> React, Angular, বা Vue.js এর মাধ্যমে শক্তিশালী ওয়েব অ্যাপ বানানো।</li></ol><h3>ভবিষ্যৎ</h3><p>জাভাস্ক্রিপ্ট একসময় শুধুমাত্র ক্লায়েন্ট-সাইডে সীমাবদ্ধ থাকলেও, <strong>Node.js</strong> এর মাধ্যমে এটি সার্ভার-সাইডেও জনপ্রিয় হয়ে উঠেছে। বর্তমানে এটি বিশ্বের অন্যতম বহুল ব্যবহৃত ভাষা।</p><p>আপনি যদি এর মাধ্যমে কাজ শুরু করতে চান, তবে প্রথমে ছোট ছোট প্রজেক্ট নিয়ে কাজ শুরু করতে পারেন এবং ধীরে ধীরে জটিল বিষয়গুলো শিখতে পারেন। 😊</p><p></p><p></p><p></p>";
        $topics = [
            ['name' => 'জাভাস্ক্রিপ্ট পরিচিতি', 'slug' => 'javascript-introduction'],
            ['name' => 'ভ্যারিয়েবল এবং ডাটা টাইপস', 'slug' => 'variables-and-data-types'],
            ['name' => 'অপারেটর এবং এক্সপ্রেশন', 'slug' => 'operators-and-expressions'],
            ['name' => 'লুপ এবং ইটারেশন', 'slug' => 'loops-and-iterations'],
            ['name' => 'শর্তযুক্ত বিবৃতি', 'slug' => 'conditional-statements'],
            ['name' => 'ফাংশন এবং এদের ব্যবহার', 'slug' => 'functions-and-their-uses'],
            ['name' => 'অ্যারেস এবং অবজেক্টস', 'slug' => 'arrays-and-objects'],
            ['name' => 'ডম ম্যানিপুলেশন', 'slug' => 'dom-manipulation'],
            ['name' => 'ইভেন্ট হ্যান্ডলিং', 'slug' => 'event-handling'],
            ['name' => 'জাভাস্ক্রিপ্ট টাইমার', 'slug' => 'javascript-timers'],
            ['name' => 'জাভাস্ক্রিপ্ট এরর হ্যান্ডলিং', 'slug' => 'javascript-error-handling'],
            ['name' => 'মডিউল এবং প্যাকেজ', 'slug' => 'modules-and-packages'],
            ['name' => 'এপিআই কল করা', 'slug' => 'api-calling'],
            ['name' => 'জাভাস্ক্রিপ্ট ডিবাগিং', 'slug' => 'javascript-debugging'],
            ['name' => 'জাভাস্ক্রিপ্ট ক্লোজার', 'slug' => 'javascript-closures'],
            ['name' => 'প্রমিস এবং অ্যাসিনক', 'slug' => 'promises-and-async'],
            ['name' => 'জাভাস্ক্রিপ্ট সিনট্যাক্স', 'slug' => 'javascript-syntax'],
            ['name' => 'অ্যারে মেথডস', 'slug' => 'array-methods'],
            ['name' => 'বিল্ট-ইন অবজেক্টস', 'slug' => 'built-in-objects'],
            ['name' => 'প্র্যাকটিক্যাল প্রোজেক্ট', 'slug' => 'practical-project'],
        ];

        foreach ($topics as $index => $topic) {
            DB::table('course_topics')->insert([
                'course_id' => 1,
                'name' => $topic['name'],
                'slug' => $topic['slug'],
                'time_duration' => "১৫ মিনিট",
                'description' => $text,
                'video_link' => 'https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1',
                'image' => 'https://static.skillshare.com/uploads/video/thumbnails/0ab63be061d2a2051fc5a20337d2bc7f/original',
                'is_paid' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
