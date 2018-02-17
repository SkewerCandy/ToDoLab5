<!-- showing the number of tasks as an alert -->
<div class="alert alert-info">{remaining_tasks} tasks are left to do!</div>

<!-- showing the data as a table -->
<table class="table">
    {display_tasks}
        <tr>
            <td>{id}</td>
            <td>{task}</td>
            <td>{priority}</td>
        </tr>
    {/display_tasks}
</table>
