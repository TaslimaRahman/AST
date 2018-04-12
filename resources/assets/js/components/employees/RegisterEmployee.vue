<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h3 class="mb-0">Register Employee</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="form-horizontal" @submit.prevent="addItem">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">First name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Jane" v-model="item.first_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Middle name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Doe" v-model="item.middle_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Last name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Bishop" v-model="item.last_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Position</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="email@gmail.com" v-model="item.position">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" value="email@gmail.com" v-model="item.email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Phonoe Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="###-###-####" v-model="item.phone_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Street</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="123-123 abc"  v-model="item.street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">City</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Toronto"  v-model="item.city">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label">Province</label>
                                <div class="col-sm-9">
                                    <select class="form-control" size="0"  v-model="item.province">
                                        <option value="AB">Alberta</option>
                                        <option value="BC">British Columbia</option>
                                        <option value="MB">Manitoba</option>
                                        <option value="NB">New Brunswick</option>
                                        <option value="NL">Newfoundland and Labrador</option>
                                        <option value="NS">Nova Scotia</option>
                                        <option value="ON">Ontario</option>
                                        <option value="PE">Prince Edward Island</option>
                                        <option value="QC">Quebec</option>
                                        <option value="SK">Saskatchewan</option>
                                        <option value="NT">Northwest Territories</option>
                                        <option value="NU">Nunavut</option>
                                        <option value="YT">Yukon</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label form-control-label"></label>
                                <div class="col-sm-9">
                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                    <input type="submit" class="btn btn-primary" value="Register" @submit.prevent ="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.container-->

</template>

<script>
    function registerEmployee() {

    }
    export default {
        name: "register-employee",
        data() {
            return {
                item: {}
            };
        },
        methods: {
            addItem() {
                console.log(this.item);
                let uri = '/api/v1/employees';
                this.$http.post(uri, this.item).then((response) => {
                    this.$router.push({ name : 'ListEmployees'})
                    console.log(response);

                })
            }
        }
    }
</script>

<style scoped>

</style>