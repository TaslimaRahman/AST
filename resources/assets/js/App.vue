<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="/">AST stone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Employees</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <router-link :to="{ name: 'ListEmployees' }" class="dropdown-item">All Employees</router-link>
                            <router-link :to="{ name: 'RegisterEmployee' }" class="dropdown-item"> Register</router-link>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Processing Job</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <router-link :to="{ name: 'ListTimeTracks' }" class="dropdown-item">All Job Process</router-link>
                        </div>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'WorkProcess' }" class="nav-link">Work</router-link>
                    </li>

                   
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            &lt;!&ndash;  <a class="dropdown-item" href="{{route('employees.index')}}">Employee</a>
                              <a class="dropdown-item" href="{{route('time_tracks.index')}}">Time Track</a>&ndash;&gt;
                        </div>
                    </li>-->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>


            </div>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>

</template>

<script>
    export default {}
</script>

<style scoped>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
<!--

1. 직원들이 출퇴근 시간 나오게 하고
2. 사람들이 일할 때 어떤 작업을 몇시간 햇는지를 알게해달라.
3. 인벤토리를 추적해야되니까, 데이터 베이스 만들어달라
4. 우리가 이제 앞으로 카드 머신이나 지문 인식 바코드 프로그램을 생각하고있으니까 염두해둬라
5. e-commerce 인보이스를 만들어달라

1 직원이 카드를찍고 -> 일하는 상태 -> 작업을 선택
인벤에서 물건 꺼내오고 -> 돌이 작업되는 단계들 -> 돌이 작업이 끝나면 새로운 바코드
파는데 인보이스 출력해야되잖아요  -> 어플리케이션에서 한번에 할수 있게
-->
