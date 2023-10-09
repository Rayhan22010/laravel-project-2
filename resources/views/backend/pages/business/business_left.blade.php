@extends('backend.layout.backend_master')

@section('page-css')
@endsection

@section('content')
{{--        start modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{url('business_left_update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input type="hidden" name="info_id" id="info_id">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>
                        <div class="mb-3">
                            <label for="date_time" class="form-label">Date & time</label>
                            <input type="text" value="" class="form-control" id="date_time"
                                aria-describedby="emailHelp" name="date_time">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" value="" class="form-control" id="heading"
                                aria-describedby="emailHelp" name="heading">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="btn_text" class="form-label">Button text</label>
                            <input type="text" value="" class="form-control" id="btn_text"
                                aria-describedby="emailHelp" name="btn_text">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

{{--        end modal --}}
<main id="main" class="main">
    <div class="container">
        <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Business blog with picture</h1>
        </div>
        <form action="{{route('business_left.store')}}" method="post" enctype="multipart/form-data"
            class="row g-3">
            @csrf
            <div class="col-12">
                <img id="imagePreview" src="#" style="max-width: 80px; max-height: 80px; display: none;">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="" onchange="previewImage(event)">
            </div>
            <div class="col-md-6">
                <label for="date_time" class="form-label">Date and time</label>
                <input type="text" class="form-control" id="date_time" name="date_time"
                    placeholder="date_time" value="">
            </div>

            <div class="col-md-6">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading"
                    placeholder="heading" value="">
            </div>
            <div class="col-md-6">
                <label for="heading" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="btn_text" name="btn_text"
                    placeholder="btn_text" value="">
            </div>
            <div class="col-md-6">
                <label for="heading" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 100px"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Added</button>
            </div>
        </form>
        <div class="row mt-5 table-responsive small">
            <table class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Date & time</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Description</th>
                        <th scope="col">button text</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bValue as $data)
                        <tr>
                            <td>
                                <img src="{{asset('upload/businessImage/' . $data->image)}}" width="40px"
                                    height="40px">
                            </td>
                            <td>{{$data->date_time}}</td>
                            <td style="width: 12rem">{{$data->heading}}</td>
                            <td style="width: 12rem">{{$data->description}}</td>
                            <td>{{$data->btn_text}}</td>
                            <td>
                                <button value="{{$data->id}}" class="btn btn-warning btn-sm editbtn"><i class="bi bi-pencil-square"></i></button>
                                <a href="{{route('business_left.delete',$data->id)}}" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</main>
@endsection

@section('page-js')
<script>
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var info_id = $(this).val();
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/business_left_edit/" + info_id,
                data: "data",
                success: function(response) {
                    $('#date_time').val(response.data.date_time);
                    $('#heading').val(response.data.heading);
                    $('#description').val(response.data.description);
                    $('#btn_text').val(response.data.btn_text);
                    $('#info_id').val(info_id);
                }

            });
        });
    });

    function previewImage(event) {
            var imagePreview = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        }
</script>
@endsection
