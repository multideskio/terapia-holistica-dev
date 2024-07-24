function timeLine() {
    let timelineContainer = $('#timelineContainer');
    $.getJSON(`${_baseUrl}api/v1/storie/ts`,
        function (data, textStatus, jqXHR) {
            data.forEach(function (item, index) {
                let timelineClass = (index % 2 === 0) ? 'left' : 'right';
                let timelineItem = `<div class="timeline-item ${timelineClass}">
                                <i class="icon ri-stack-line"></i>
                                <div class="date">{DATE}</div>
                                <div class="content">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/users/user-dummy-img.jpg" alt="" class="avatar-sm rounded">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fs-15">{NAME} <small class="text-muted fs-13 fw-normal">- {timeAgo}</small></h5>
                                            <p class="text-muted mb-2">${item.type}</p>
                                            <div class="hstack gap-2">
                                                <a class="btn btn-sm btn-light"><span class="me-1">&#128293;</span> {ITEM}</a>
                                                <a class="btn btn-sm btn-light"><span class="me-1">&#129321;</span> {ITEM}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                timelineContainer.append(timelineItem);
            })
        }
    );
}

$(document).ready(function () {
    timeLine();
});