@extends('backstage.template')

@section('title')
上傳一般消息
@endsection

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/backstage/edit-news.css')}}">
@endsection


@section('main')
    <main class="add-news">
        <div class="title">
            編輯一般消息
        </div>
        <section class="add-input-box">
            <form action="/admin/news-edit-upload/{{$editnews->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="edit-img-box">
                    <span>目前圖片預覽</span>
                    <img src="{{$editnews->img_path}}" alt="">
                </div>
                <div class="add-title">
                    <label for="date">時間</label><input type="text" name="date" id="date" value="{{$editnews->date}}">
                </div>
                <div class="add-title">
                    <label for="title">標題</label><input type="text" name="title" id="title" value="{{$editnews->title}}">
                </div>
                <div class="add-title">
                    <label for="title">重新上傳圖片<span>(建議尺寸為600*600px, 72dpi)</span></label><input type="file"
                        accept="image/png, image/jpeg, image/jpg" name="img" id="img">
                </div>
                <div class="add-content">
                    <label for="main-news-content">內容</label>
                    <textarea id="summernote2" name="content" id="news-content">

                    {{$editnews->content}}

                    </textarea>
                    <script>
                        $(document).ready(function() {
                            $('#summernote2').summernote({
                                height: 300,
                            });

                        });
                    </script>
                </div>
                <div class="btnArea">
                    <button type="submit">確定更改</button>
                    <a href="/admin/news-list">取消</a>
                </div>
            </form>
        </section>

    </main>
@endsection
