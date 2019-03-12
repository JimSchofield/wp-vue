Vue.component('vue-header',{
    props: {
        menuJson: String
    },
    computed: {
        menu() {
            return JSON.parse(this.menuJson);
        },
    },
    template:
`
<div style="background: #444; color: #ddd; padding: 1em">
    <strong>Main Menu</strong>
    <ol class="mainMenu" style="margin: 0; padding: 0; display: flex; list-style: none">
        <li v-for="(item, index) in menu" :key="index">
            <a :href="item.url" style="color: #ddd; padding: 1em">{{item.title}}</a>
        </li>
    </ol>
</div>
`,
})