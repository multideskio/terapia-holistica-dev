function timeLine() {
    $("#loadTimeLine").show();
    let timelineContainer = $('#timelineContainer');
    $.getJSON(`${_baseUrl}api/v1/timeline/ts`,
        function (data, textStatus, jqXHR) {
            data.forEach(function (item, index) {
                let timelineClass = (index % 2 === 0) ? 'left' : 'right';
                let timelineItem = `<div class="timeline-item ${timelineClass}">
                                <i class="icon ${item.ico}"></i>
                                <div class="date">${item.date}</div>
                                <div class="content">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/users/user-dummy-img.jpg" alt="" class="avatar-sm rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fs-15">${item.desc} <small class="text-muted fs-13 fw-normal"> - <span class="badge bg-info">${item.timeAgo}</span> </small></h5>
                                            <p class="ts-3 text-muted mb-2">${item.obs}</p>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-sm btn-primary" onclick="edit('${item.id}')">Editar</button>
                                                <!-- <a class="btn btn-sm btn-light"><span class="me-1">&#128293;</span> {ITEM}</a>
                                                <a class="btn btn-sm btn-light"><span class="me-1">&#129321;</span> {ITEM}</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                timelineContainer.append(timelineItem);
            })

            $("#loadTimeLine").hide();
        }
    );
}


function edit(id){
    Swal.fire({
        html: 'Recurso indisponível no momento<br><b>ID: </b>'+id,
        icon: 'error'
    });
}

$(document).ready(function () {
    timeLine();
});