<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Rejection Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h4, h3 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        b {
            color: #333;
        }
        .section-title {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .table-container {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .hidden-row {
            display: none;
        }
        .footer {
            font-size: 0.8em;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <p><i>Please review the rejected time entries below and resubmit as necessary.</i></p>

    <div class="table-container">
        <h4 class="section-title">TIME ENTRY REJECTION</h4>
        <p>You have time for the period ending <b>${context._week_info_to}</b> for Project <b>${context._project_id} – ${context._project_name}</b> that was rejected by <b>${context._wp_pm_name} (${context._wp_pm_id})</b> with the following comments (if any):</p>

        <table border="1">
            <thead>
                <tr>
                    <th>Week Ending</th>
                    <th>Project ID</th>
                    <th>Project Description</th>
                    <th>WP Name</th>
                    <th>Prop Hours</th>
                    <th>Activity Type Desc</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <tr class=${context.rejectedEntries[0].class}>
                    <td>${context.rejectedEntries[0].z_date}</td>
                    <td>${context.rejectedEntries[0]._project_id}</td>
                    <td>${context.rejectedEntries[0]._project_name}</td>
                    <td>${context.rejectedEntries[0]._wp_name}</td>
                    <td>${context.rejectedEntries[0]._prop_hours}</td>
                    <td>${context.rejectedEntries[0]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[0]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[1].class}>
                    <td>${context.rejectedEntries[1].z_date}</td>
                    <td>${context.rejectedEntries[1]._project_id}</td>
                    <td>${context.rejectedEntries[1]._project_name}</td>
                    <td>${context.rejectedEntries[1]._wp_name}</td>
                    <td>${context.rejectedEntries[1]._prop_hours}</td>
                    <td>${context.rejectedEntries[1]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[1]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[2].class}>
                    <td>${context.rejectedEntries[2].z_date}</td>
                    <td>${context.rejectedEntries[2]._project_id}</td>
                    <td>${context.rejectedEntries[2]._project_name}</td>
                    <td>${context.rejectedEntries[2]._wp_name}</td>
                    <td>${context.rejectedEntries[2]._prop_hours}</td>
                    <td>${context.rejectedEntries[2]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[2]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[3].class}>
                    <td>${context.rejectedEntries[3].z_date}</td>
                    <td>${context.rejectedEntries[3]._project_id}</td>
                    <td>${context.rejectedEntries[3]._project_name}</td>
                    <td>${context.rejectedEntries[3]._wp_name}</td>
                    <td>${context.rejectedEntries[3]._prop_hours}</td>
                    <td>${context.rejectedEntries[3]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[3]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[4].class}>
                    <td>${context.rejectedEntries[4].z_date}</td>
                    <td>${context.rejectedEntries[4]._project_id}</td>
                    <td>${context.rejectedEntries[4]._project_name}</td>
                    <td>${context.rejectedEntries[4]._wp_name}</td>
                    <td>${context.rejectedEntries[4]._prop_hours}</td>
                    <td>${context.rejectedEntries[4]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[4]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[5].class}>
                    <td>${context.rejectedEntries[5].z_date}</td>
                    <td>${context.rejectedEntries[5]._project_id}</td>
                    <td>${context.rejectedEntries[5]._project_name}</td>
                    <td>${context.rejectedEntries[5]._wp_name}</td>
                    <td>${context.rejectedEntries[5]._prop_hours}</td>
                    <td>${context.rejectedEntries[5]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[5]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[6].class}>
                    <td>${context.rejectedEntries[6].z_date}</td>
                    <td>${context.rejectedEntries[6]._project_id}</td>
                    <td>${context.rejectedEntries[6]._project_name}</td>
                    <td>${context.rejectedEntries[6]._wp_name}</td>
                    <td>${context.rejectedEntries[6]._prop_hours}</td>
                    <td>${context.rejectedEntries[6]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[6]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[7].class}>
                    <td>${context.rejectedEntries[7].z_date}</td>
                    <td>${context.rejectedEntries[7]._project_id}</td>
                    <td>${context.rejectedEntries[7]._project_name}</td>
                    <td>${context.rejectedEntries[7]._wp_name}</td>
                    <td>${context.rejectedEntries[7]._prop_hours}</td>
                    <td>${context.rejectedEntries[7]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[7]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[8].class}>
                    <td>${context.rejectedEntries[8].z_date}</td>
                    <td>${context.rejectedEntries[8]._project_id}</td>
                    <td>${context.rejectedEntries[8]._project_name}</td>
                    <td>${context.rejectedEntries[8]._wp_name}</td>
                    <td>${context.rejectedEntries[8]._prop_hours}</td>
                    <td>${context.rejectedEntries[8]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[8]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[9].class}>
                    <td>${context.rejectedEntries[9].z_date}</td>
                    <td>${context.rejectedEntries[9]._project_id}</td>
                    <td>${context.rejectedEntries[9]._project_name}</td>
                    <td>${context.rejectedEntries[9]._wp_name}</td>
                    <td>${context.rejectedEntries[9]._prop_hours}</td>
                    <td>${context.rejectedEntries[9]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[9]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[10].class}>
                    <td>${context.rejectedEntries[10].z_date}</td>
                    <td>${context.rejectedEntries[10]._project_id}</td>
                    <td>${context.rejectedEntries[10]._project_name}</td>
                    <td>${context.rejectedEntries[10]._wp_name}</td>
                    <td>${context.rejectedEntries[10]._prop_hours}</td>
                    <td>${context.rejectedEntries[10]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[10]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[11].class}>
                    <td>${context.rejectedEntries[11].z_date}</td>
                    <td>${context.rejectedEntries[11]._project_id}</td>
                    <td>${context.rejectedEntries[11]._project_name}</td>
                    <td>${context.rejectedEntries[11]._wp_name}</td>
                    <td>${context.rejectedEntries[11]._prop_hours}</td>
                    <td>${context.rejectedEntries[11]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[11]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[12].class}>
                    <td>${context.rejectedEntries[12].z_date}</td>
                    <td>${context.rejectedEntries[12]._project_id}</td>
                    <td>${context.rejectedEntries[12]._project_name}</td>
                    <td>${context.rejectedEntries[12]._wp_name}</td>
                    <td>${context.rejectedEntries[12]._prop_hours}</td>
                    <td>${context.rejectedEntries[12]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[12]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[13].class}>
                    <td>${context.rejectedEntries[13].z_date}</td>
                    <td>${context.rejectedEntries[13]._project_id}</td>
                    <td>${context.rejectedEntries[13]._project_name}</td>
                    <td>${context.rejectedEntries[13]._wp_name}</td>
                    <td>${context.rejectedEntries[13]._prop_hours}</td>
                    <td>${context.rejectedEntries[13]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[13]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[14].class}>
                    <td>${context.rejectedEntries[14].z_date}</td>
                    <td>${context.rejectedEntries[14]._project_id}</td>
                    <td>${context.rejectedEntries[14]._project_name}</td>
                    <td>${context.rejectedEntries[14]._wp_name}</td>
                    <td>${context.rejectedEntries[14]._prop_hours}</td>
                    <td>${context.rejectedEntries[14]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[14]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[15].class}>
                    <td>${context.rejectedEntries[15].z_date}</td>
                    <td>${context.rejectedEntries[15]._project_id}</td>
                    <td>${context.rejectedEntries[15]._project_name}</td>
                    <td>${context.rejectedEntries[15]._wp_name}</td>
                    <td>${context.rejectedEntries[15]._prop_hours}</td>
                    <td>${context.rejectedEntries[15]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[15]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[16].class}>
                    <td>${context.rejectedEntries[16].z_date}</td>
                    <td>${context.rejectedEntries[16]._project_id}</td>
                    <td>${context.rejectedEntries[16]._project_name}</td>
                    <td>${context.rejectedEntries[16]._wp_name}</td>
                    <td>${context.rejectedEntries[16]._prop_hours}</td>
                    <td>${context.rejectedEntries[16]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[16]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[17].class}>
                    <td>${context.rejectedEntries[17].z_date}</td>
                    <td>${context.rejectedEntries[17]._project_id}</td>
                    <td>${context.rejectedEntries[17]._project_name}</td>
                    <td>${context.rejectedEntries[17]._wp_name}</td>
                    <td>${context.rejectedEntries[17]._prop_hours}</td>
                    <td>${context.rejectedEntries[17]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[17]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[18].class}>
                    <td>${context.rejectedEntries[18].z_date}</td>
                    <td>${context.rejectedEntries[18]._project_id}</td>
                    <td>${context.rejectedEntries[18]._project_name}</td>
                    <td>${context.rejectedEntries[18]._wp_name}</td>
                    <td>${context.rejectedEntries[18]._prop_hours}</td>
                    <td>${context.rejectedEntries[18]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[18]._note}</td>
                </tr>
                <tr class=${context.rejectedEntries[19].class}>
                    <td>${context.rejectedEntries[19].z_date}</td>
                    <td>${context.rejectedEntries[19]._project_id}</td>
                    <td>${context.rejectedEntries[19]._project_name}</td>
                    <td>${context.rejectedEntries[19]._wp_name}</td>
                    <td>${context.rejectedEntries[19]._prop_hours}</td>
                    <td>${context.rejectedEntries[19]._activity_type_desc}</td>
                    <td>${context.rejectedEntries[19]._note}</td>
                </tr>
            </tbody>
        </table>  

        <p>“Please submit time only for the time that has been rejected from the app <a href=${context.link} target="_blank">My Inbox</a>. Reach out to your Work Package manager with any questions. Thank you.”</p>
    </div>

    
</body>
</html>