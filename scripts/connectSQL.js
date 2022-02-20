import config from './configSQL';
import { createConnection } from 'mysql2';
import { connect } from 'http2';

const connection = createConnection(config);


// take `skills` and paste in page
async function takeSkills ()  {
    let skills = await connection.query();
    const [rows, fields] = await connection.execute('SELECT * FROM `skills` WHERE 1');
    console.log(rows, fields);
    connection.end()
}

takeSkills();

