
require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';

import {routes} from './routes.js';

import App from './App.vue';



Vue.use(VueRouter);
Vue.prototype.$http = axios;

const router = new VueRouter({ mode: 'history', routes: routes});

new Vue({
    el: '#app',
    router,
    components: {App},
    template: '<App/>'
})


//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

'use strict';
$(document).ready(function () {
    //Initiate Chosen Plugin.
    var id = 1;
    var ajax_data = '';
    //Adding Material


    $("#jq_add_button").click(function (event) {

        event.preventDefault();
        console.log("button is working");

        $.ajax({
            url: "/ajax_call",
            method: "POST",
            data: {
                '_token': $('input[name=_token]').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            success: function (response) {
                for (var i = 0; i < response.length; i++) {
                    ajax_data += `<option value="${response[i][0]}">${response[i][1]}</option>`;
                }
                var add_material = `<div class="row">
                     <div class="form-group">
                        <div class="">
                            <select name="material[]" class="form-control">
                                <option value="">Choose a material</option>    
                                ` + ajax_data + `
                            </select>
                        </div>
                        <div class="">
                            <div class="form-group">
                            <label class="control-label" for="qty">Qty</label>
                                <div class="">
                                    <input type="number" name="quantity[]" class="form-control" id="qty" aria-describedby="qty">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                var ajax_data = '';
                $('#jq_add_material').append(add_material);
            }
        });

        id++;
    });

    //// Search the work the employee.
    $("#jq_search_button").click(function (event) {
        event.preventDefault();
        var job_process_id = $("#jq_job_process_title").val();
        var barcode = $('#jq_barcode').val();

        $.ajax({
            url: "/call_record_by_ajax",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            data: {
                '_token': $('input[name=_token]').val(),
                'barcode': barcode,
                'job_process_id': job_process_id
            },
            datatype: 'json',
            method: "POST",
            success: function (data) {
                console.log(data);
                var material = "", quantity = "";

                for (var i = 0; i < data[2].length; i++) {
                    material += data[2][i].title + "<br/>";
                    quantity += data[3][i].quantity + "<br/>";
                }

                var html = `
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Current Job</th>
                            <th>Materials</th>
                            <th>Quantity</th>
                            <th>Choose</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1</td>
                                <td>${data[0].first_name} ${data[0].last_name}</td>
                                <td>${data[1].title}</td>
                                <td>${material}</td>
                                <td>${quantity}</td>
                                <td><button class="btn btn-default" type="submit"> select </button></td>
                            </tr>
                        </tbody>
                    </table>`;
                $('#jq_add_table').append(html);
            }
        });
    });


////////////////////////////////////////////////////////////////
    // SHOWING OR HIDING WEB ELEMENTS USING JQUERY
    //////////////////////////////////////////////////////////
    // start or end
    $('input[name="start_or_end"]:radio').change(function (event) {
        if (this.value == "1") {
            $('#jq_working_on_materials').show();
            $('#jq_end_working_materials').hide();
        }
        else {
            $('#jq_working_on_materials').hide();
            $('#jq_start_working_process').hide();
            $('#jq_end_working_materials').show();
        }
    });
    //Start working
    $("#jq_working_on_materials").click(function (event) {
        event.preventDefault();
        $('#jq_start_working_process').show();
    });

    // new or exisiting
    $('input[name="new_or_existing"]:radio').click(function (event) {
        console.log(this.value);
        if (this.value == "1") {
            $('#jq_new_table').show();
        }
        else {
            $('#jq_new_table').hide();
        }
    });
})
;

//출퇴근.vue
//작업관리.vue
//인벤토리 관리.vue
//대시보드.vue
//인보이스
