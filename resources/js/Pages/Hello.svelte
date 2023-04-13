
<script>
	import Layout from './../Shared/Layout.svelte';
    export let name;
</script>

<Layout name={name}>
    <h1>Hello {name}!</h1>
</Layout>
