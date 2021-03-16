const nameinput = document.getElementById('name');
const jobNumber = document.getElementById('jobNumber');
const dropzone = document.getElementById('dropzone');
const outzone = document.getElementById('elements');


$(document).on('click', '#save', function (e) {
    e.preventDefault();
console.log(document.getElementById('parent').innerHTML);
    $.ajax({
        url: '/saveData',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        // not POST, laravel won't allow it

        data: {

            div: document.getElementById('dropzone').innerHTML
        },
        success: function (data) {
            console.log(data); // here comes the login form	
            // location.reload();
        },
        error: function (data) {},
    });
});
$("#profilepic").draggable({
    drag: function () {
        this.style.zIndex = "2";
        this.classList.add("name-img");

    }
});
$("#name").draggable({
    drag: function () {
        this.classList.add("name-img");

    }
});
$("#job").draggable({
    drag: function () {
        this.classList.add("job-comp");

    }
});
$("#categories").draggable({
    drag: function () {
        this.classList.add("categories-wrap");

    }
});

$("#allowed-areas").draggable({

});


$("#job-number").draggable({
    drag: function () {
        this.classList.add("job-number-qr-code");

    }
});
$("#qr-code").draggable({
    drag: function () {
        this.classList.add("job-number-qr-code");

    }
});


function allowDrop(event) {
    event.preventDefault();
}

function changeColor() {
    nameinput.style.backgroundColor = document.getElementById('inputcolor').value;

}

$("#sortable").sortable();
$("#sortable").droppable();
$("#sortable li").draggable();
$("#sortable").disableSelection();
$("#dropzone").droppable({

    drop: function (event, ui) {
        // $(this).css('background', 'rgb(105 1 90)');
        $(this).css('background', '#f3f3f3');
        console.log(ui.draggable.position().left);
        ui.draggable.css({
            top: ui.draggable.position().top,
            left: ui.draggable.position().left,
            position: 'absolute'
        });
        $('#dropzone').append($(ui.draggable));

    },
    over: function (event, ui) {
        $(this).css('background', 'rgb(101 1 83)');
        // $(this).css('background', 'white');

    },
    out: function (event, ui) {
        $(this).css('background', 'rgb(144 0 200)');
        $(this).css('background', 'white');

    }
})
$("#elements").droppable({

    drop: function (event, ui) {
        // $(this).css('background', 'rgb(105 1 90)');
        $(this).css('background', '#1d1461');
        console.log(ui.draggable.position().left);
        ui.draggable.css({
            top: ui.draggable.position().top,
            left: ui.draggable.position().left,
            position: 'absolute'
        });
        $('#elements').append($(ui.draggable));

    },
    over: function (event, ui) {
        // $(this).css('background', 'rgb(101 1 83)');
        $(this).css('background', 'rgb(52 47 90)');

    },
    out: function (event, ui) {
        $(this).css('background', '#1d1461');
        // $(this).css('background', 'white');

    }
})
// outzone.addEventListener("drop", e => {
//     e.preventDefault();
//     const droppedelementId = e.dataTransfer.getData('text/plain')
//     const droppedelement = document.getElementById(droppedelementId);
//     console.log(droppedelement);
// this.style.color="wheat"
    
//     droppedelement.css({
//         top: droppedelement.position().top,
//         left: droppedelement.position().left,
//         position: 'absolute'
//     });
//     $('#outzone').append($(droppedelement));
//     // dropzone.appendChild(droppedelement)
//     dropzone.classList.remove("drop-zone--over")

// })
function createCard(){
 $parent=document.getElementById('card');
 $outzone=document.getElementById('outzone');
 $elements=document.getElementById('elements');

 $cardFront=document.getElementById('idFront');
 $width=document.getElementById('cardWidth').value;
 $height=document.getElementById('cardHeight').value;
 $cardFront.setAttribute("style","width:"+$width+"px;"+"height:"+$height+"px");
//  $outzone.style.height=$height+"px";
//  $elements.style.height=$height+"px";

//  $cardFront.setAttribute("style","height:"+$height+"px");
 $parent.style.display="block";
console.log($cardFront);


}