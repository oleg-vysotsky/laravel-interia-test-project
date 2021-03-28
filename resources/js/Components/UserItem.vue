<template>
    <div>
        <inertia-link :href="`/user/${user.id}`">
            {{ user.name }}
        </inertia-link>
    </div>
</template>

<script>
    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        }
    }
</script>
