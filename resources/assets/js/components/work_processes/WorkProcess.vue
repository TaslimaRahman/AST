<template>
    <div class="container">
        <div class="row justify-content-center margin-top">
            <div class="col-sm-8">
                <button type="button" class="btn btn-primary btn-lg btn-block" @click="toStartWork">Start Work</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block" @click="toEndWork">End Work</button>
            </div>
        </div>

            <start-work v-if="current === 'start'"></start-work>
            <end-work v-if="current === 'end'"></end-work>
    </div>
</template>

<script>
    import StartWork from './StartWork';
    import EndWork from './EndWork';

    export default {
        data() {
            return {
                current: ''
            }
        },
        name: "work-process",
        components: {
            StartWork,
            EndWork
        },
        methods: {
            toStartWork() {
                console.log("Start function is working");
                this.current = 'start';
            },
            toEndWork() {
                console.log("End function is working");
                this.current = 'end';
            }
        }
    }
</script>

<style scoped>
    .margin-top {
        margin-top: 40px;
    }
</style>