
@extends('layouts.app')

@section('title', 'Job Opening/工作机会')

@section('navbar')
@parent
@endsection

@section('content')

<link rel="stylesheet" href="{{asset('css/comment.css')}}" />

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="z-article-show">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="features">
                <div class="z-title">
                    <h1>
                        <a href="" onclick="return false" data-toggle="modal" data-target="#commentModal">
                            <span class="glyphicon glyphicon-pencil"></span> 留言请戳我</a>
                    </h1>
                </div>
                <div class="z-comments">
                    @foreach ($comments as $comment)
                        <hr id="comment{{ $comment->id }}">
                        @if( $comment->user_id == 1 )
                            <img src="{{asset('images/v.jpg')}}" class="img-circle z-avatar">
                            <p class="z-name z-center-vertical">官方认证管理员 <span class="label label-info z-label">管理员</span></p>
                        @else
                            <p class="z-avatar-text"><?php echo $comment['avatar_text'] ? $comment['avatar_text'] : '匿' ?></p>
                            <p class="z-name"><?php echo $comment['name'] ? $comment['name'] : '匿名' ?></p>
                        @endif
                        <p class="z-content">{{ $comment->content }}</p>
                        <p class="z-info">{{ $comment->created_at_diff }} · {{ $comment->city }} <span data-toggle="modal" data-target="#commentModal" data-replyid="{{ $comment->id }}" data-replyname="{{ $comment->name }}" class="glyphicon glyphicon-share-alt z-reply-btn">回复</span></p>
                        <div class="z-reply">
                            @foreach( $comment->replys as $reply )
                                @if( $reply->user_id == 1 )
                                    <img src="{{asset('images/v.jpg')}}" class="img-circle z-avatar">
                                    <p class="z-name z-center-vertical">官方认证管理员 <span class="label label-info z-label">管理员</span></p>
                                @else
                                    <p class="z-avatar-text"><?php echo $reply['avatar_text'] ? $reply['avatar_text'] : '匿' ?></p>
                                    <p class="z-name"><?php echo $reply['name'] ? $reply['name'] : '匿名' ?></p>
                                @endif
                                <p class="z-content">回复 <b>{{ $reply->target_name }}</b>：{{ $reply->content }}</p>
                                <p class="z-info">{{ $reply->created_at_diff }} · {{ $reply->city }} <span data-toggle="modal" data-target="#commentModal" data-replyid="{{ $comment->id }}" data-replyname="{{ $reply->name }}" class="glyphicon glyphicon-share-alt z-reply-btn">回复</span></p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- comment Modal -->
        <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">说点什么吧..</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/commentStore" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputFile">留言</label>
                                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">昵称</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="[选填] 怎么称呼？" value="{{ $inputs->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">邮箱</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="[选填] 如果必要，我们会邮件联系您" value="{{ $inputs->email }}">
                            </div>
                            <input type="text" id="parent_id" name="parent_id" style="display:none">
                            <input type="text" id="target_name" name="target_name" style="display:none">
                            <input type="submit" id="commentFormBtn"  style="display:none">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="document.getElementById('commentFormBtn').click()">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- img Modal -->
        <div class="modal fade bs-example-modal-lg" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="max-width:100%">
	<div class="modal-dialog" style="width:100%" role="document">
		<div class="modal-content" style="text-align:center;background-color:rgba(0,0,0,0.5)">
			<img id="imgModalImage" src="" alt="" style="max-width:100%">
		</div>
	</div>
</div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#commentModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		if (button.data('replyid')) {
			var replyid = button.data('replyid');
			var replyname = button.data('replyname') ? button.data('replyname') : '匿名';

			var modal = $(this);
			modal.find('#parent_id').val(replyid);
			modal.find('#target_name').val(replyname);
			modal.find('#content').attr("placeholder", "回复 @"+replyname)
		}else {
			var modal = $(this);
			modal.find('#parent_id').val(0);
			modal.find('#target_name').val('');
			modal.find('#content').attr("placeholder", "")
		}
	})

	$("img").click(function(){
		$('#imgModalImage').attr('src', this.src)
		$('#imgModal').modal('show')
	});
	$('#imgModal').click(function(){
		$('#imgModal').modal('hide')
	})
</script>
@endsection

@section('footer')
	@parent
@endsection
