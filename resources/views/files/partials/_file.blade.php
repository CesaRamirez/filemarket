<article class="media">
  <div class="media-content">
    <div class="content">
      <p>
        <strong>
          <a href="#">{{ $file->title }}</a>
        </strong><br>
        <p>{{ $file->overview_short }}</p>
      </p>
    </div>
    {{ $links or '' }}
  </div>
</article>
