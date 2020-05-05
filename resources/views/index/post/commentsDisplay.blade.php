<p class="section_title comments_list_title">{{ $comments->count()}} Comments</p>
@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
<ul class="comments_list">
    <li id="comment-2" class="comment even thread-even depth-1 comment_item">
        <div id="comment_body-2" class="comment_body">
            <div class="comment_author_avatar">
                <img alt='' src='{{asset('img/'.$comment->user->image)}}' srcset='http://0.gravatar.com/avatar/c53e6cf9997b676ae2b07343c9a322a8?s=180&#038;d=mm&#038;r=g 2x' class='avatar avatar-90 photo' height='90' width='90'/></div>
            <div class="comment_content">
                <div class="comment_info">
                    <h6 class="comment_author">{{ $comment->user->name }}</h6>
                    <div class="comment_posted">
                        <span class="comment_posted_label">Posted</span>
                        <span class="comment_date">{{ $comment->created_at }}</span>
                        <span class="comment_time_before">at</span>
                        <span class="comment_time">7:49 am</span>
                        <span class="comment_counters">
                            <a href="#" class="comment_counters_item comment_counters_likes trx_addons_icon-heart-empty enabled" title="Like" data-commentid="2" data-likes="0" data-title-like="Like" data-title-dislike="Dislike"><span class="comment_counters_number">0
                                </span>
                                <span class="comment_counters_label">Likes</span>
                            </a>
                                                    </span>
                    </div>
                </div>
                <div class="comment_text_wrap">
                    <div class="comment_text">
                        <p>{{ $comment->body }}
                        </p>
                    </div>
                </div>

                {{-- <div class="reply comment_reply">
                    <a rel="nofollow" class="comment-reply-login" href="http://mendel-antiques.ancorathemes.com/wp-login.php?redirect_to=http%3A%2F%2Fmendel-antiques.ancorathemes.com%2F2017%2F05%2F25%2F10-tips-for-restoring-old-furniture%2F">Log in to Reply</a>
                </div> --}}
            </div>
        </div>
        <ul class="children">
            <li id="comment-3" class="comment odd alt depth-2 comment_item">
                <div id="comment_body-3" class="comment_body">
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <input type=text name=body class="form-control" />
                    <input type=hidden name=post_id value="{{ $post_id }}" />
                    <input type=hidden name=parent_id value="{{ $comment->id }}" />
                </div>
                <div class="form-group">
                    <input type=submit class="btn btn-warning" value="Reply" />
                </div>
            </form>
                </div>
            </li><!-- #comment-## -->
        </ul><!-- .children -->
        @include('index.post.commentsDisplay', ['comments' => $comment->replies])

    </li><!-- #comment-## -->
</ul>
    </div>
@endforeach
