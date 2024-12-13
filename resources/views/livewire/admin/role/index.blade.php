<div>
    @section('title')
        {{ $title }}
    @endsection
    <div class="px-20 col-span-full xl:col-span-12 dark:bg-gray-800">
        <div class="overflow-x-auto">
            @role('super-admin')
            <livewire:admin.role.create />
            @endrole
        </div>
    </div>
    @role('super-admin')
    <div>
        <livewire:admin.role.table />
        <livewire:admin.role.edit />
        <livewire:admin.role.delete />
    </div>
    {{-- <div>
        <livewire:admin.permission.index />
    </div> --}}
    @endrole
</div>
