<template>
    <div>
        <h2>Details - {{employeeInfo.first_name}} {{employeeInfo.middle_name}} {{employeeInfo.last_name}}</h2>

        <div>

            <hr/>
            <dl class="dl-horizontal">
                <dt>
                    Name
                </dt>
                <dd>
                    {{employeeInfo.first_name}} {{employeeInfo.middle_name}} {{employeeInfo.last_name}}
                    <hr/>
                </dd>

                <dt>
                    Position
                </dt>
                <dd>
                    {{employeeInfo.position}}
                    <hr/>
                </dd>
                <dt>
                    Working History
                </dt>
                <dd>
                    <table class="table table-striped table-size">
                        <caption>Employee work History</caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Start Time</th>
                            <th>End time</th>
                            <th>Job type</th>
                            <th>Materials</th>
                            <th>Quantity</th>
                            <th>Work status</th>
                            <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(item, index) in items">
                            <td>{{index + 1}}</td>
                            <td>{{ item.start_time }}</td>
                            <td>{{ item.end_time }}</td>
                            <td>{{ item.job_process.title }}</td>
                            <td>
                                <div v-for="(value, index) in item.materials">
                                    {{ index + 1 }}. {{ value.title }}
                                </div>
                            </td>
                            <td>
                                <div v-for="(value, index) in item.materials">
                                    {{ index + 1 }}: {{ value.pivot.quantity }}
                                </div>
                            </td>
                            <td v-if="item.start_time === item.end_time"  class="icon-align"><i class="fa fa-toggle-off"></i></td>
                            <td v-else class="icon-align"><i class="fa fa-toggle-on"></i></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </dd>


                <dt>
                    Email
                </dt>

                <dd>
                    {{employeeInfo.email}}
                    <hr/>
                </dd>

                <dt>
                    Phone Number
                </dt>
                <dd>
                    {{employeeInfo.phone_number}}
                    <hr/>
                </dd>

                <dt>
                    Address
                </dt>

                <dd>
                    {{employeeInfo.street}} <br>
                    {{employeeInfo.city}} <br>
                    {{employeeInfo.province}} <br>
                    {{employeeInfo.postal_code}}
                    <hr/>
                </dd>
            </dl>
        </div>
        <p>
            <router-link :to="{ name: 'ListEmployees' }" class="">Back to List</router-link>
        </p>
    </div>
</template>

<script>
    export default {
        name: "time-track-detail",
        mounted() {
            console.log('Component mounted.');
        },
        data() {
            return {
                items: [],
                employeeInfo: []
            };
        },
        created: function () {
            this.fetchItems();
        },
        methods: {
            fetchItems() {
                let uri = '/api/v1/time_tracks/' + this.$route.params.id;
                this.$http.get(uri).then((response) => {
                    this.items = response.data;
                    this.employeeInfo = this.items[0].employee;
                    //console.log(this.items);
                });
            }
        }
    }
</script>

<style scoped>
    .table-size {
        font-size: 80%;
        margin-left: 40px;
    }

</style>