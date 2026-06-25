import { createClient } from "redis";
import express from "express";

const app = express();

const client = await createClient()
  .on("error", (err) => console.log("Redis Client Error", err))
  .connect();

app.get("/", async (req, res) => {

        const data = await client.get("cacheValue");
        if(data){
            res.json({data: JSON.parse(data), source: "cache"});
            return;
        }

        const {data} = await axios.get("https://jsonplaceholder.typicode.com/todos");
        await client.set("cacheValue", JSON.stringify(data));
        client.expire("cacheValue", 20); // Cache expires in 20 seconds
        res.json(data);
});

app.listen(3000, () => {
    console.log("Server is running on port 3000");
});