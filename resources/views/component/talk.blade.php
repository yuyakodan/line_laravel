<div class="talk-components">
    <span class="user-name">{{$item->user_name}}</span>
    <span class="talk-time">{{$item['created_at']->format('Y年m月d日 H時i分') }}</span>
    <span class="talk-content">{{$item->content}}</span>
</div>