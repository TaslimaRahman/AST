
///////////////////// Employee
import ListEmployees from './components/employees/ListEmployees';
import RegisterEmployee from './components/employees/RegisterEmployee';

////////////////////Time Track
import ListTimeTracks from './components/time_tracks/ListTimeTracks';
import TimeTrackDetail from './components/time_tracks/TimeTrackDetail';

///////////////////Work Process
import WorkProcess from './components/work_processes/WorkProcess';

export const routes = [
    {   name: 'ListEmployees',
        path: '/api/v1/employees',
        component: ListEmployees
    },
    {   name: 'RegisterEmployee',
        path: '/api/v1/employees/create',
        component: RegisterEmployee
    },
    {
        name: 'ListTimeTracks',
        path: '/api/v1/time_tracks',
        component: ListTimeTracks
    },
    {
        name: 'TimeTrackDetail',
        path: '/api/v1/time_tracks/:id',
        component: TimeTrackDetail
    },
    {
        name: 'WorkProcess',
        path: '/api/v1/time_tracks/create',
        component: WorkProcess
    }
];
