<template>
    <div>
        <UserItem :user="user" v-for="(user, index) in users" :key="index"/>
    </div>
</template>

<script>
import UserItem from "./../Components/UserItem.vue";

export default {
    components: {UserItem},
    props: {
        users: {
            type: Array
        },
    },
}
</script>
