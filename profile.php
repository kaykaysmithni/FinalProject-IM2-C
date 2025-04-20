<?php include 'views/header.php'; ?>

<style>
  body {
    margin: 0;
    font-family: 'Helvetica Neue', sans-serif;
   
    background: radial-gradient(circle at bottom, #222222 0%, #23272a 100%);
    color: white;
  }
  .app {
  display: flex;
  height: 88vh;
  padding: 10vh;
  width: 170vh;
}

.server-sidebar {
     background-color: #1e1f22;
  width: 80px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 10px 0;
}


  .channel-list {
    width: 260px;
    background-color: #2b2d31;
    padding: 10px;
    display: flex;
    flex-direction: column;
  }

  .server-title {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 20px;
  }

  .section-title {
    font-size: 12px;
    color: #b9bbbe;
    margin: 10px 0 4px;
    text-transform: uppercase;
  }

  .channel {
    padding: 5px 10px;
    color: #b9bbbe;
    cursor: pointer;
  }

  .channel:hover {
    background-color: #393c43;
    border-radius: 4px;
  }

  .channel.active {
    background-color: #40444b;
    color: white;
    border-radius: 4px;
  }

  .main-area {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .main-area h2 {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .main-area p {
    color: #b9bbbe;
    margin-bottom: 20px;
  }

  .join-btn {
    background-color: white;
    color: #23272a;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
  }

  .bottom-profile {
    margin-top: auto;
    padding: 10px;
    background-color: #1e1f22;
    display: flex;
    align-items: center;
  }

  .bottom-profile .avatar {
    width: 32px;
    height: 32px;
    background-color: #f47fff;
    border-radius: 50%;
  }

  .bottom-profile .user {
    color: white;
    font-size: 14px;
    margin-left: 10px;
  }
  .app {
  display: flex;
  height: 88vh;
  padding: 10vh;
  width: 150vh;
}
.nav {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: center;
}

.nav li {
  margin: 20px 0;
}

.nav img {
  width: 50px;
  height:  50px;
  border-radius: 50%;
}
.top-bar {
  display: flex;
  align-items: center;
  padding: 10px;
  background-color: #2b2d31;
  gap: 10px;
}
.top-bar input {
  flex: 1;
  padding: 8px;
  background-color: #1e1f22;
  border: none;
  color: white;
  border-radius: 5px;
}

.friends-btn {
  color: #fff;
  font-size: 14px;
}

.add-friend {
  background-color: #5865f2;
  color: white;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
  cursor: pointer;
}

.content {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 14px;
  color: #b9bbbe;
}
</style>
<div class="app">
  <div class="sidebar">
    <div class="logo">☰</div>
    <ul class="nav">
      <li><img src="res/logo1.png" /></li>
      <li><img src="res/logo5.png" /></li>
      <li><img src="res/logo.png"/></li>
      <li><img src="res/logo7.png"/></li>
      <li><img src="res/logo6.png"/></li>
    </ul>
  </div>    
<div class="channel-list">
  <div class="server-title">BLOCK C</div>

  <div class="section-title">Text Channels</div>
  <div class="channel"># general</div>
  <div class="channel"># chikahan</div>

  <div class="section-title">Voice Channels</div>
  <div class="channel">🔊 balwarte ni ekay</div>
  <div class="channel">🔊 General</div>
  <div class="channel active">🔊 Gaming</div>

  <div class="bottom-profile">
    <div class="avatar"></div>
    <div class="user">bulldog</div>
  </div>
</div>

<div class="main-area">
  <h2>Gaming</h2>
  <p>No one is currently in voice</p>
  <button class="join-btn">Join Voice</button>
</div>
    <div class="main">
    <div class="top-bar">
      <input type="text" placeholder="Find or start a conversation" />
      <div class="friends-btn">Friends ▾</div>
      <button class="add-friend">Add Friend</button>
    </div>
 
  </div>
</div>

<?php include 'views/footer.php'; ?>
