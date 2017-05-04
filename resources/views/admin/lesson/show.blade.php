@include('shared.modal.header', ['title' => 'Lesson Detail'])
<form action="{{ route('admin.project.store') }}" method="post" class="modal-form">
	{{ csrf_field() }}
	<div class="modal-body form-horizontal">
		<div class="row">
			<div class="col-sm-12">
				<textarea id="code">{{ $lesson->content }}</textarea>
			</div>
		</div>
	</div>
</form>

<script>
	var mixedMode = {
		name: "htmlmixed",
		scriptTypes: [{
			matches: /\/x-handlebars-template|\/x-mustache/i,
			mode: null
		}, {
			matches: /(text|application)\/(x-)?vb(a|script)/i,
			mode: "vbscript"
		}]
	};

	var editor = CodeMirror.fromTextArea($("#code")[0], {
		mode: mixedMode,
		lineNumbers: true,
		theme: "dracula",
		readOnly: 'nocursor'
	});
</script>