<div class="flex flex-col items-center pb-8 border-b-2 md:items-start border-grey-200">
    <div class="overflow-hidden w-60 h-60 rounded-xl md:w-full md:h-64 md:rounded-3xl">
        <img loading="lazy" src="{{ $page->headshot }}" class="object-cover w-full h-full" alt="">
    </div>
  
    <div class="text-center md:text-left md:mt-8">
        <p class="mb-2 text-3xl font-medium text-gray-700 md:text-4xl">
            Steven Roland
        </p>
  
        <p class="mb-2 text-lg font-medium text-primary-500 md:text-xl">
            Full-stack Developer
        </p>

        <div class="prose-sm">
            <p>
                For the last decade I have been focused on both front-end and back-end 
                web development to offer solutions that are thoughtful, personal, and 
                deeply valuable across the finance, education, and retail industries.
            </p>
            <p>
                My experience stems largely from my roles in retail and customer 
                service. As a result, I have always been driven to solve problems 
                for people from all over the world, to make their lives easier, and to 
                connect them with each other.
            </p>
        </div>
    </div>
</div>
  
<div class="space-y-8 divide-y-2 divide-gray-200">
    <x-resume.sidebar.section title="Personal Details" class="pt-8">
        <x-resume.sidebar.item icon="box.envelope" href="mailto:steven+resume@mojave.io">
            <x-slot name="label">
                Email
            </x-slot>
            steven@mojave.io
        </x-resume.sidebar.item>

        <x-resume.sidebar.item icon="box.link-alt" href="https://stevenroland.com">
            <x-slot name="label">
                Website
            </x-slot>
            stevenroland.com
        </x-resume.sidebar.item>

        <x-resume.sidebar.item icon="box.map">
            <x-slot name="label">
                Current Location
            </x-slot>
            Pensacola, Florida
        </x-resume.sidebar.item>
    </x-resume.sidebar.section>

    <x-resume.sidebar.section title="Social Media" class="pt-8">
        <x-resume.sidebar.item icon="box.github" href="https://github.com/stvnrlnd">
            <x-slot name="label">
                Github
            </x-slot>
            stvnrlnd
        </x-resume.sidebar.item>

        <x-resume.sidebar.item icon="box.linkedin" href="https://linkedin.com/in/stvnrlnd">
            <x-slot name="label">
                LinkedIn
            </x-slot>
            stvnrlnd
        </x-resume.sidebar.item>

        <x-resume.sidebar.item icon="box.twitter" href="https://twitter.com/stvnrlnd">
            <x-slot name="label">
                Twitter
            </x-slot>
            @stvnrlnd
        </x-resume.sidebar.item>
    </x-resume.sidebar.section>

    <x-resume.sidebar.section title="Languages" class="pt-8">
        <x-resume.sidebar.item icon="flags.us">
            <x-slot name="label">
                Native
            </x-slot>
            English
        </x-resume.sidebar.item>
    </x-resume.sidebar.section>

    <x-resume.sidebar.section title="Hobbies" class="pt-8">
        <p class="mt-6 text-xl font-medium text-gray-600">
            Hiking, photography, woodworking
        </p>
    </x-resume.sidebar.section>
</div>