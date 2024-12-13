<div class="py-20">
    @role('super-admin')
    <div class="px-20 col-span-full xl:col-span-12 dark:bg-gray-800">
        <div class="overflow-x-auto">
            <livewire:admin.permission.create />
        </div>
    </div>
    <livewire:admin.permission.table />
    <livewire:admin.permission.edit />
    <livewire:admin.permission.delete />
    @endrole
</div>
