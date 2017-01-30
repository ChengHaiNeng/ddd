@include('msg.headreal')
@forelse($msgs as $m)
		<tr>
			<td>{{$m->title}}</td>
			<td>{{$m->content}}</td>
			<td><a href = "up/{{$m->id}}">编辑</a></td>
			<td><a href = "del/{{$m->id}}">删除</a></td>
		</tr>
@empty
@endforelse
	</table>
</body>
</html>