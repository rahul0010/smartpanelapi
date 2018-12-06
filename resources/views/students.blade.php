@extends('app')
@section('content')
    <h1 class="heading__primary padding-small text-center margin-bottom-medium">Students</h1>
    <div class="btn-add">
        <span class="plus">&plus;</span>
    </div>
    <div id="loaddata">
        <div id="data"></div>
    </div>
    <div id="load"></div>
<script src="{{ url('js/app.js') }}"></script>
    <script>
        img = "{{ url('/svg/loading.svg') }}";
        var mainDiv = document.getElementById('data');
        var loadDiv = document.getElementById('load');
        load(url='api/v1/students');
        function load(url='api/v1/students')
        {
            loadDiv.innerHTML = `<img class="loading" src="${img}">`;
            getData(url).then((response) => {
                var msg;
                console.log(response.data)
                responseData = response.data;
                responseData.forEach(data => {
                    msg = `<div class="card margin-bottom-large">
                                    <img src="${data.photo}" alt="" class="card__img">
                                    <div class="card__description" href="/student/${data.id}">
                                        <span class="card__description--id">${data.id}</span>
                                        <span class="card__description--title">${data.first_name} ${data.middle_name} ${data.last_name}</span>
                                        <span class="card__description--dob">${data.date_of_birth}</span>
                                        <span class="card__description--course">${data.course_name}</span>
                                    </div>
                                    <div class="card__buttons">
                                        <a href="/student/${data.id}" class="btn btn--green margin-top-medium margin-bottom-medium">Update</a>
                                        <a href="/student/${data.id}" class="btn btn--red margin-top-medium margin-bottom-medium margin-left-medium">Remove</a>
                                        <a href="/student/${data.id}/fees" class="btn btn--blue margin-top-medium margin-bottom-medium margin-left-medium">Fees</a>
                                    </div>
                                </div>`;
                    mainDiv.innerHTML += msg;
                });
                if(response.next_page_url.toLowerCase() != 'null')
                {
                    msg = `<button id="btn--loadmore" onclick="load('${response.next_page_url}');" class="btn margin-top-medium margin-bottom-medium margin-left-medium">Show More</button>`
                    loadDiv.innerHTML = msg;
                }
            });
        }
    </script>
@endsection
