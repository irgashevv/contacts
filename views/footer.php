                <script src="../dist/js/jquery.min.js"></script>
            <script src="../dist/js/popper.min.js"></script>
        <script src="../dist/js/bootstrap.min.js"></script>
                <script>
                    const deleteBtn = document.querySelector('#delete-btn');
                    deleteBtn.addEventListener('click', () => {
                        confirm("are you sure you want to delete ? ")
                    })
                </script>
    </body>
</html>