<tr>
	<td>
		{{{ $post->author->username }}}
	</td>
	<td>
		{{ nl2br(e($post->content)) }}
	</td>
</tr>
<tr>
	<td>
		@include('forum::partials.action', array('label' => 'Edit', 'url' => $post->postAlias, 'accessModel' => $post))
	</td>
	<td>
		{{ trans('forum::base.posted_at') }} {{ $post->created_at }}
		@if ($post->updated_at != null && $post->created_at != $post->updated_at)
			{{ trans('forum::base.last_update') }} {{ $post->updated_at }}
		@endif
	</td>
</tr>
