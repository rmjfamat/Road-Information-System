// Initialize Firebase
var config = {
        apiKey: "AIzaSyATDbbwKjHhLtxNW_6_8fqKR-OJoiCuoao",
        authDomain: "trast-1520491910556.firebaseapp.com",
        databaseURL: "https://trast-1520491910556.firebaseio.com",
        projectId: "trast-1520491910556",
        storageBucket: "trast-1520491910556.appspot.com",
        messagingSenderId: "541291450311"
      };
      firebase.initializeApp(config);

let table;

$(document).ready(function() {
    table = $('#table').DataTable( {
    	"createdRow": function ( row, data, index ) {
            $(row).attr('id', data[0]);
        },
            "columnDefs": [
            {
                "targets": [0],
                "visible": false,
                "searchable": false
            }
        ]
    } );
    updateFeedback();
    updateReport();
});

function updateFeedback(){
    let rootRef = firebase.database().ref().child("feedbacks");
        rootRef.on("child_added", snap => {
        	const id = '#' + snap.key;
        	if($(id).length){
            	table.row(id).remove().draw( false );
        	}
            let data = [];
            data.push(snap.child("mes").val());//0
            data.push(snap.child("loc").val());//1
            data.push(snap.key);//2
            addFeedback(data);
       });
}

function updateReport(){
    let rootRef = firebase.database().ref().child("reports");
        rootRef.on("child_added", snap => {
        	 const id = '#' + snap.key;
        	if($(id).length){
            	table.row(id).remove().draw( false );
        	}
            let data = [];
            data.push(snap.child("det").val());//0
            data.push(snap.child("loc").val());//1
            data.push(snap.child("rep").val());//2
            data.push(snap.child("tim").val());//3
            data.push(snap.child("typ").val());//4
            data.push(snap.key);//5
            addReport(data);
       });
}

function addFeedback(data){ // Add new row to table
    var currentPage = table.page();
    const btn = "<button class='dt-deleteF' style='margin-right:5px;border-radius:10px'> <img src='images/rubbish-bin.png'></button>";
    table.row.add([data[2], "Feedback", data[0], data[1], btn]).draw();
}

function addReport(data){ // Add new row to table
    var currentPage = table.page();
    const btn = "<button class='dt-deleteR' style='margin-right:5px;border-radius:10px;'> <img src='images/rubbish-bin.png'></button>";
    table.row.add([data[5], "Report", data[0] + " at " + data[3] + " as reported by " + data[2] + " with a report type of " + data[4], data[1], btn]).draw();
}

function logOut(){ //Log out user
    firebase.auth().signOut().then(function() {
        console.log("Sign out successful!");
    }).catch(function(error) {
        console.log("Error signing out:")
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        console.log(error);
    });
}

firebase.auth().onAuthStateChanged(user => {
  console.log("Auth state changed")
  if(user){
  } else {
    window.location = 'login.php';
  }
});

$('#table tbody').on( 'click', '.dt-deleteF', function () {
    var dtRow = table.row( $(this).parents('tr') );
    var data = table.row( $(this).parents('tr') ).data();
    if(confirm("Are you sure to delete this row?")){
        var id = '#' + data[0];
        console.log(id);
        table.row(id).remove().draw( false );
        firebase.database().ref().child("feedbacks/" + data[0]).remove();
	}
});

$('#table tbody').on( 'click', '.dt-deleteR', function () {
    var dtRow = table.row( $(this).parents('tr') );
    var data = table.row( $(this).parents('tr') ).data();
    if(confirm("Are you sure to delete this row?")){
        var id = '#' + data[0];
        console.log(id);
        table.row(id).remove().draw( false );
        firebase.database().ref().child("reports/" + data[0]).remove();
	}
});