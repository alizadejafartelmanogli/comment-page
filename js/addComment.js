$(document).ready(function () {
    $('#addComment').click(function () {
        let nameValue = document.getElementById('name').value
        let commentValue = document.getElementById('comment').value

        let firstCount = Number.parseInt(document.getElementById('firstCount').innerHTML)
        let secondCount = Number.parseInt(document.getElementById('secondCount').innerHTML)

        let sumCount = firstCount+secondCount
        let resCount = parseInt(document.getElementById('sumCount').value)

        if (nameValue == "" || commentValue == "") {
            $('#formError').text('ошибка ввода данных')
            return false
        }else if (resCount != sumCount){
            $('#captchaError').text('капча введена неверно')
            return false
        }
        $.ajax({
            method: 'POST',
            url: 'http://localhost:63342/pro/main/create.php',
            data: {'name': nameValue, 'comment': commentValue}
        })
    })
})




