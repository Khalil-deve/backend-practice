**Redis Concept — Backend Practice**

- **Description:** A minimal Express server demonstrating a simple Redis caching pattern: the root endpoint returns cached data when available, otherwise fetches it from an external API and stores it in Redis with a short TTL.

**Prerequisites**
- **Node.js:** v18+ (required for ES modules and top-level await)
- **Redis:** a Redis server running locally (default: `localhost:6379`)

**Install**

1. Install dependencies:

```
npm install
```

**Run**

```
node server.js
```

The server listens on port 3000 by default.

**What the server does**
- On `GET /` the server attempts to read the key `cacheValue` from Redis. If found, it responds with the cached data and a `source: "cache"` flag.
- If the key is missing, the server fetches data from `https://jsonplaceholder.typicode.com/todos`, stores the response under `cacheValue` in Redis, sets a 20-second expiration (TTL), and returns the fetched data.

**Implementation notes**
- The Redis key used is `cacheValue` and the TTL is 20 seconds.
- The project expects the `redis` and `axios` packages to be installed (see `package.json`).
- `server.js` uses ES module syntax (`import`) and top-level `await`. If you encounter module-related errors, set `"type": "module"` in [package.json](package.json).

**Troubleshooting**
- If Redis is not running you'll see connection errors from the Redis client. Start Redis (e.g., `redis-server`) before running the app.
- If you see an error about `axios` not defined, ensure `axios` is installed and imported in `server.js`.

**Files**
- Server: [server.js](server.js)
- Project manifest: [package.json](package.json)
