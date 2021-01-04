@php
if ($user_data == null)
{
    echo "<script>window.location.href='".url("/login")."'</script>";
    exit;
}
@endphp