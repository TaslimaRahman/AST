<template>
    <div>
        <h2>Work for all employees</h2>

        <h4>Today's date</h4>

        <table class="table table-striped">
            <caption>All Employee's Work display</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Employee Barcode</th>
                <th>Current Job</th>
                <th>Materials</th>
                <th>Quantity</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in items">
                <td>{{index + 1}}</td>
                <td>{{ item.employee.first_name }} {{ item.employee.middle_name }} {{ item.employee.last_name }}</td>
                <td>{{item.employee.identification}}</td>
                <td>{{ item.job_process.title }}</td>
                <td>
                    <div v-for="(value, index) in item.materials">
                        {{ index + 1 }}. {{ value.title }}
                    </div>
                </td>
                <td>
                    <div v-for="(value, index) in item.materials">
                        <!--{{ index + 1 }}:-->  {{ value.pivot.quantity }}
                    </div>
                </td>
                <td>{{ item.start_time }}</td>
                <td>{{ item.end_time }}</td>
                <td v-if="item.start_time === item.end_time" class="text-center"> <i class="fa fa-toggle-off"></i></td>
                <td v-else class="text-center"> <i class="fa fa-toggle-on"></i></td>
                <td><router-link :to="{ name: 'TimeTrackDetail', params:{id : item.id} }" class="text-center">Work</router-link></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "list-time-tracks",
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
                let uri = '/api/v1/time_tracks';
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