<template>
<div id="app">
    <h1>Danh Sách Sinh Viên</h1>
    <form action="#">
        <input type="text" v-model="msvNew" placeholder="New MSV">
        <input type="text" v-model="svNew" placeholder="New Student">
        <button @click="AddNew()">Add</button>
    </form>

    <table style="width:100% " border="1px solid #ebebeb">
        <tr>
            <th>MSV</th>
            <th>FullName</th>
        </tr>
        <tr v-for="sv in SVs" :key="sv.MSV">
            <td>{{sv.MSV}}</td>
            <td>{{sv.name}}</td>
        </tr>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            SVs: [{
                    MSV: "001",
                    name: "Nguyen Van A"
                },
                {
                    MSV: "002",
                    name: "Nguyen Van 2"
                },
                {
                    MSV: "003",
                    name: "Nguyen Van 3"
                },
                {
                    MSV: "004",
                    name: "Nguyen Van 4"
                },
                {
                    MSV: "005",
                    name: "Nguyen Van 5"
                },
                {
                    MSV: "006",
                    name: "Nguyen Van 6"
                },
            ],
            svNew: '',
            msvNew: '',
            newarray: {},
        }
    },
    methods: {

        AddNew() {
            var svNew = this.svNew;
            var msvNew = this.msvNew;
            var newarray = this.newarray;
           newarray = {
                MSV: msvNew,
                name: svNew,
            };
            window.console.log(newarray);

            // for (var i = 0; i < this.SVs.length; i++) {
            // window.console.log(this.SVs);

            if (this.SVs.indexOf(newarray) != -1) {
                alert("Already exist!");
                return;

            }
            this.SVs.push(newarray);

            window.console.log(this.SVs);
            // window.console.log(this.newarray);
            window.console.log(this.SVs.indexOf(newarray));

            // }*/

        }
    }
}
</script>

<style>
#app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}

table {
    border-collapse: collapse;

}

form {
    margin-bottom: 10px;
}
</style>
