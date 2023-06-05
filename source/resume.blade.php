---
headshot: /assets/images/resume/steven.webp
---

@extends('_layouts.main')

@section('body')
    <div class="flex flex-col justify-between md:flex-row md:-mx-5 lg:-mx-0 ">
        <div class="xl:w-1/4 md:w-1/3 md:px-5 lg:px-0">
            @include('_partials.resume.sidebar')
        </div>

        <div class="mt-12 space-y-16 xl:w-2/3 md:w-3/5 md:px-5 lg:px-0 md:mt-0">
            <x-resume.section title="Experience">
                @foreach ($jobs as $job)
                    @include('_partials.resume.job')
                @endforeach
            </x-resume.section>

            <x-resume.section title="Skills">
                <ul class="flex flex-col items-start md:flex-row md:flex-wrap md:-m-4">
                    @foreach ([
                        'PHP', 'JavaScript, TypeScript HTML', 'CSS, SCSS/Sass', 'SQL',
                        'Laravel', 'Statamic', 'WordPress', 'Vue', 'Angular', 'React', 'Electron', 'Node.js', 'Tailwind CSS', 'Alpine.js', 'Bootstrap 3/4',
                        'VS Code, Sublime Text, Atom', 'TablePlus, Sequel Pro', 'Composer', 'npm/yarn',
                        'Adobe Illustrator', 'Adobe XD', 'Moqups', 'Zeplin',
                        'Git, GitLab, GitHub, BitBucket', 'JIRA, Github Issues, Azure DevOps',
                        'Google Analytics', 'Docker', 'Laravel Forge, Laravel Envoy', 'DigitalOcean, Heroku',
                        'User Interface Design', 'User Research', 'User Experience Engineering',
                    ] as $skill)
                        <li class="py-4 md:px-4">
                            <p class="px-6 py-2 font-medium transition duration-700 ease-in-out bg-gray-100 rounded-xl text-primary-500">
                                {{ $skill }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </x-resume.section>
        </div>
    </div>
@endsection