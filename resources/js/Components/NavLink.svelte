<script>
    import { Link } from '@inertiajs/svelte';
    export let url;
    export let label;
    export let path;
    export let active = location.pathname === path;
    export let icon = null;

</script>


<Link href="{url}" class="{active ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:text-white hover:bg-indigo-700' } group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
    {#if icon}
        <svelte:component this={icon} />
    {/if}

    {label}
</Link>
