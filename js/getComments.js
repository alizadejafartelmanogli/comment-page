async function getComments() {
    let response = await fetch('http://localhost:63342/pro/main/read.php');
    if (response.ok) {
        let comments = await response.json()
        let comment = document.getElementById('comments')

        for (let i = comments.length - 1; i >= 0; i--) {

            let userName = document.createElement('h5')
            userName.textContent = comments[i]['user_name']
            comment.appendChild(userName)

            let userComment = document.createElement('h6')
            userComment.textContent = comments[i]['comment_text']
            comment.appendChild(userComment)

            let userDate = document.createElement('p')
            userDate.textContent = comments[i]['data_time']
            comment.appendChild(userDate)

            let deleteForm = document.createElement('form')
            deleteForm.id = 'delete-form'
            comment.appendChild(deleteForm)

            let deleteButton = document.createElement('button')
            deleteButton.type = 'submit'
            deleteButton.name = 'deleteComment'
            deleteButton.id = 'deleteComment'
            deleteButton.className = 'btn btn-danger'
            deleteButton.value = comments[i]['id']
            deleteButton.textContent = 'Удалить комментарий'
            deleteForm.appendChild(deleteButton)

            $(document).ready(function () {
                $('#deleteComment').click(function () {
                    let idValue = document.getElementById('deleteComment').value
                    console.log(idValue)
                    $.ajax({
                        method: 'POST',
                        url: 'http://localhost:63342/pro/main/delete.php',
                        data: {'id': idValue}
                    })
                })
            })
        }
    }
}