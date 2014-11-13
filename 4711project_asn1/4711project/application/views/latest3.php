<!--
   This view shows the latest three attractions by date on the database in a simple table.
-->
<div>
    <h1>Latest Additions</h1>
    <table class="gallery">
        <tr>
            {attractions}
            <td class="oneimage">
                <a href="/{category}/get/{id}">
                    <img src="/data/image/thumb/{pic}"/>
                    <h2>{name}</h2>
                    <p>Added on {date}</p>
                </a>
            </td>
            {/attractions}
        </tr>
    </table>
</div>