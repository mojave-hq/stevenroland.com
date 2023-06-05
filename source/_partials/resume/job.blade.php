<div class="space-y-4">
    <div class="flex items-center">    
        @if ($job->location)
            <div class="flex items-center">
                <x-icon svg="box.map" class="w-5 h-5 mr-1 text-gray-600 fill-current" />
                <p class="font-medium text-gray-600">
                    {{ $job->location }}
                </p>
            </div>
        @endif
    </div>

    <div class="flex items-center">
        <div class="w-10 h-10 overflow-hidden rounded-md shrink-0">
            <x-icon :svg="$job->companyLogo" />
        </div>
    
        <div class="ml-2">
            <p class="text-sm font-medium text-gray-600">
                {{ $job->companyName }}
            </p>
    
            <p class="text-xl font-medium text-gray-800">
                {{ $job->title }}
            </p>
        </div>
    </div>

    <div class="md:max-w-xl">
        <div class="prose prose-p:text-gray-600 prose-a:text-primary-500 max-w-none">
            {{ $job->description }}
        </div>
    </div>

    <div class="grid gap-4 xl:gap-8 xl:grid-cols-2">
        @foreach ($projects->filter(fn ($project) => $project->companyName == $job->companyName) as $project)
            <div class="flex flex-col justify-between px-6 py-5 transition duration-700 ease-in-out bg-gray-100 rounded-md">
                <div class="flex flex-col my-4">
                    @if($project->clientName)
                        <p class="text-sm font-medium text-gray-600">
                            {{ $project->clientName }}
                        </p>
                    @endif
                    <div class="mb-2 text-xl font-medium text-gray-800">
                        {{ $project->name }}
                    </div>

                    @if ($project->startDate)
                        <div class="flex items-center mb-2">
                            <x-icon svg="box.calendar" class="w-5 h-5 mr-1 text-gray-600 fill-current" />
                            <span class="font-medium text-gray-600">
                                {{ $project->startDate }}
                                @if ($project->endDate)
                                    -
                                    {{ $project->endDate }}
                                @endif
                            </span>
                        </div>
                    @endif
                    
                    <div class="prose prose-p:text-sm prose-p:text-gray-600">
                        {{ $project->description }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>