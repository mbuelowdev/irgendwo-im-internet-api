# irgendwo-im-internet-api

Backend service for [irgendwo-im-internet.de](https://irgendwo-im-internet.de/).

### Rendering of login page

**Unauthorized**: Nginx shows the login page contained in the repo irgendwo-im-internet-login.

**Authorized and valid**: Nginx shows the actual frontend contained in irgendwo-im-internet.

Validation happens in /auth.

### Authentication workflow

1. User is unauthenticated and visits any possible link (except fonts and other static content). Gets redirected to the login page everytime.
2. User clicks on "Login with Discord" and sends a request to backend/auth/create.
3. /auth creates a session with a cookie for the user and redirects the user to discord oauth.
4. User logs into discord and authorizes our website to access minimal needed information (email, icon, username).
5. Discord redirects to our page with state and token.
6. We pass the received information to backend/auth/process, validate it and set the users session to "authenticated" for x hours. (probably in sqlite)
7. We redirect to frontend/. Now nginx asks us if the user with session_id 1234 is authenticated and redirects us to the actual page if so.
8. We tell nginx to cache the auth request to backend/auth/validate

https://www.nginx.com/blog/validating-oauth-2-0-access-tokens-nginx/

https://www.youtube.com/watch?v=w5ZLlnid8g0

Wo kommt die Login-Page hin? Muss ja im Frontend sein. Koennen wir einfach den Content von frontend/login holen?

TODO nginx vue image