<x-panel class="p-4 bg-primary/10 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div class="self-start text-sm">Employerr</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 text-xl font-bold">Job Title</h3>
        <p class="text-sm mt-4">Description - Salary</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>

        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>