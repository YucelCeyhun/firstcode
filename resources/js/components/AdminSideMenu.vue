<template name="fade">
    <ul class="menu">
        <li class="menu-list" v-for="item in list" :key="item.id"
            :class="{'pb-0':isRoute(item.route,$props.route[1])}">
            <a :href="item.url" :title="item.title" class="list-link" v-on:click="defaultAnchor($event)"><i
                :class="item.icon"></i> {{item.text}}</a>
                <ul class="sub-menu"
                    :class="{active:isRoute(item.route,$props.route[1])}">
                    <li class="sub-menu-list hover:bg-gray-200 hover:text-indigo-500 py-3" v-for="item in item.subList"
                        :key="item.id"
                        :class="{'sub-active':isRoute(item.route,$props.route[2])}">
                        <a :href="item.url" :title="item.title" class="sub-list-link ml-8 ">{{item.text}}</a>
                    </li>
                </ul>
        </li>
    </ul>
</template>

<script>
import menuJson from "../menu";


    export default {
        name: "AdminSideMenu",
        props: ['route'],
        data: function () {
            return {
                list: [],
            }
        },
        mounted() {
            this.list = menuJson;
        },
        methods: {
            isRoute: function (listRoute, uriRoute) {
                return listRoute === uriRoute;
            },
            defaultAnchor: function (event) {
                event.preventDefault();
            },
        }
    }

</script>

<style scoped>

</style>
