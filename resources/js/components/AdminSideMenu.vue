<template name="fade">
    <ul class="menu">
        <li class="menu-list" v-for="item in list" v-on:click="item.active=!item.active" :class="{'pb-0':item.active}">
            <a :href="item.url" :title="item.title" class="list-link"><i :class="item.icon"></i> {{item.text}}</a>
            <transition  name="fade">
                <ul v-if="item.active" class="sub-menu" :class="{active:item.active}">
                    <li class="sub-menu-list hover:bg-gray-200 hover:text-indigo-500 py-3" v-for="item in item.subList" :class="{'sub-active':item.active}">
                        <a :href="item.url" :title="item.title" class="sub-list-link ml-8 ">{{item.text}}</a>
                    </li>
                </ul>
            </transition>
        </li>
    </ul>
</template>

<script>
    export default {
        name: "AdminSideMenu",
        props:['route'],
        data: function () {
            return {
                list: [],
            }
        },
        created() {
            this.list = [
                {
                    text: 'Anasayfa', url: '#', title: 'deneme', icon: 'icofont-home', route:'home-settings',active:this.isRoute('home-settings',this.route[1]), subList: [
                        {text: 'Description', url: '', title: 'deneme',active:this.isRoute('description',this.route[2])},
                        {text: 'Default Title', url: '', title: 'deneme',active:this.isRoute('home-settings2',this.route[1])},
                        {text: 'Footer Text', url: '', title: 'deneme',active:this.isRoute('home-settings2',this.route[1])},
                    ]
                },
                {text: 'Kullanıcılar', url: '', title: 'deneme', icon: 'icofont-users-alt-2', subList: []},
                {text: 'İçerik', url: '', title: 'deneme', icon: 'icofont-page', subList: []},
                {text: 'Bakım Modu', url: '', title: 'deneme', icon: 'icofont-tools-alt-2', subList: []},
                {text: 'Admin Panel', url: '', title: 'deneme', icon: 'icofont-business-man', subList: []},

            ]
        },
        methods:{
            isRoute:function (listRoute,uriRoute) {
                return listRoute === uriRoute;
            },
        }
    }
</script>

<style scoped>

    .active {
        display: block;
    }

    .fade-enter-active, .fade-leave-active {
        transition: all .7s ease-out;
    }

    .fade-enter, .fade-leave {
        opacity: 0;
    }

</style>
