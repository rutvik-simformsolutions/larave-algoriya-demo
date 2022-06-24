var hiddenURL = $('#hiddenURL').val();

/**
 * Company table
 * 
 * @return  Company data
 */
$("#company_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": 'Company/CompanyController/company_list',
        "type": 'POST'
    },
    "language": {
        "infoFiltered": "",
    }
});

/**
 * Wallettype table
 *
 * @return  wallettype data                    
 */
$("#wallettype_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": 'Wallettype/WallettypeController/wallettype_list',
        "type": 'POST'
    },
    "language": {
        "infoFiltered": "",
    }
});
/**
 * leadsource table
 *
 * @return  leadsourcer data                    
 */
$("#leadsource_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": 'Leadsource/LeadsourceController/leadsource_list',
        "type": 'POST'
    },
    "language": {
        "infoFiltered": "",
    }
});

$("#employee_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'employee-list',
        "type": 'POST'
    },
    "columnDefs": [

        {

            "targets": [4, 5],

            "searchable": false,

            "orderable": false,

        },

    ],
    "language": {
        "infoFiltered": "",
    }
});
$("#bdm_tester_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'bdm_tester/bdm_tester_list',
        "type": 'POST'
    },
    "columnDefs": [

        {

            "targets": [4, 5],

            "searchable": false,

            "orderable": false,

        },

    ],
    "language": {
        "infoFiltered": "",
    }
});

$("#project_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'project-list',
        "type": 'POST'
    },
    "columnDefs": [

        {

            "targets": [3, 4],

            "searchable": false,

            "orderable": false,

        },
        {
            render: function(data, type, full, meta) {
                return "<div class='limited' style='max-width: 250px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'>" + data + "</div>";
            },
            "targets": [0, 1, 2]
        },

    ],
    "language": {
        "infoFiltered": "",
    }
});

/*department list table */
$("#department_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'department-list',
        "type": 'POST'
    },
    "columnDefs": [

        {

            "targets": [1, 2],

            "searchable": false,

            "orderable": false,

        },
        {
            render: function(data, type, full, meta) {
                return "<div class='limited' style='max-width: 250px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'>" + data + "</div>";
            },
            "targets": [1]
        },
    ],
    "language": {
        "infoFiltered": "",
    }
});

/* bug list table */
$("#bug_list_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'bug-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },
        {
            // render: function(data, type, full, meta) {
            //     return "<div title='" + data + "' class='limited' style='width:200px;'>" + data + "</div>";
            // },
            // targets: 7
        }
    ],
    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }

});


/* Active Lead list table */
$("#lead_list_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'lead-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },

        {
            "targets": [7, 8],
            "orderable": false,
            "searchable": false,
        },

    ],

    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }

});

//lead Source List
$("#lead_source_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'lead-source-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },

        {
            "targets": [3],
            "orderable": false,
            "searchable": false,
        },

    ],

    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }

});




/* Active Client list table */
$("#client_list_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'client-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },
        {
            "targets": [4],
            "visible": false,
            "searchable": false,
            "orderable": false,
        },
        {
            "targets": [5, 7, 8],
            "searchable": false,
            "orderable": false,
        },

    ],
    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }



});

// skill table
$("#skill_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'skill-list',
        "type": 'POST'
    },
    "columnDefs": [

        {

            "targets": [3, 4],

            "searchable": false,

            "orderable": false,

        },
        {
            render: function(data, type, full, meta) {
                return "<div class='limited' style='max-width: 250px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'>" + data + "</div>";
            },
            "targets": [0, 1, 2]
        },

    ],
    "language": {
        "infoFiltered": "",
    }
});

/* InActive Lead list table */
$("#inactive_lead_list_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'inactive-lead-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },
        {

            "targets": [7, 8],
            "searchable": false,

            "orderable": false,
        },
    ],

    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }

});

/* InActive Client list table */
$("#inactive_client_list_table").DataTable({
    "autoWidth": false,
    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'inactive-client-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false,
        },
        {
            "targets": [4],
            "visible": false,
            "searchable": false,
            "orderable": false,
        },
        {
            "targets": [5, 6, 7],
            "searchable": false,
            "orderable": false,
        },

    ],
    "order": [
        [0, "desc"]
    ],
    "language": {
        "infoFiltered": "",
    }

});

/* Assign project list table */
$("#assign_project_table").DataTable({

    "serverSide": true,
    "pageLength": 10,
    "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
    ],
    "ajax": {
        "url": hiddenURL + 'assign-project-list-table',
        "type": 'POST'
    },
    "columnDefs": [{
            "targets": [1],
            "visible": false,
            "searchable": false,
            "orderable": false,
        },
        {
            "targets": [2],
            "searchable": false,
            "orderable": false,
        },

    ],
    "language": {
        "infoFiltered": "",
    }
});