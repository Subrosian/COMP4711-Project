<!--
   Displays all attractions in the data array with their locations.
-->
<div>
    <table class="gallery">
        {attractions}
        <tr>
            <td class="oneimage">
                <a href="/{category}/get/{id}">
                    <img src="/data/image/thumb/{pic}"/>
                    <h1>{name}</h1>
                    <h3>Located in {location}</h3>
                </a>
            </td>
            {/attractions}
        </tr>
    </table>
</div>