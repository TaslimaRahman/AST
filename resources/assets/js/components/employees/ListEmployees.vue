<template>
    <div>
        <h2>Employees</h2>

        <h4>Today's date</h4>

        <table class="table table-striped">
            <caption>All Employees display</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Barcode</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in items">
                <td>{{item.id}}</td>
                <td>{{ item.first_name }} {{ item.middle_name }} {{ item.last_name }}</td>
                <td>{{ item.identification }}</td>
                <td>{{ item.position }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.phone_number }}</td>
                <td>{{ item.street }} {{ item.city }} {{ item.province }} {{ item.postal_code }}</td>
                <!--<td>{{ item.price }}</td>
                <td><router-link :to="{name: 'EditItem', params: { id: item.id }}" class="btn btn-primary">Edit</router-link></td>
                <td><button class="btn btn-danger" v-on:click="deleteItem(item.id)">Delete</button></td>-->
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "list-employees",
        mounted() {
            console.log('Component mounted.');
        },
        data() {
            return {
                items: []
            };
        },
        created: function () {
            this.fetchItems();
        },
        methods: {
            fetchItems() {
                let uri = '/api/v1/employees';
                this.$http.get(uri).then((response) => {
                    this.items = response.data;
                     console.log(this.items);
                });
            }
        }
    }
</script>

<style scoped>

</style>