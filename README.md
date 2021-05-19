## FactionsUI
[![Poggit](https://poggit.pmmp.io/ci.shield/LoreDOTexe/FactionsUI/FactionsUI)](https://poggit.pmmp.io/ci/LoreDOTexe/FactionsUI/FactionsUI)

# 🚨 NOTICE: THIS PLUGIN IS INCOMPLETE 🚨

### After executing /f create [name], your players can then do /f manage to bring up a UI!

| Feature | Description | Required Role |
| --- | --- | --- |
| `Invite` |`Sends an invite to a player's **/f invites** inbox!` | `Officer, CoLeader or Leader` |
| `Set Role` |`Promotes/demotes a member to either Recruit, Elder, Officer, or Co-Leader!` | `Officer, Co-Leader or Leader` |
| `Kick` |`Kicks a member! [REQUIRES CONFIRMATION]` | `Officer, Co-Leader or Leader` |
| `Set Home` |`Sets the faction home! [REQUIRES CONFIRMATION]` | `Co-Leader or Leader` |
| `Manage Alliances` |`Remove or add alliances!` | `Co-Leader or Leader` |
| `Claim` |`Claims land for a configurable price! [REQUIRES CONFIRMATION]` | `Co-Leader or Leader` |
| `Bank` |`Deposit/withdraw money from the faction bank` | `Recruit + Elder + Officer (Deposit), Co-Leader + Leader (Withdraw)` |
| `Perk Shop` |`Unlock perks such as STR boost, money multipliers, effects for all members and increased claim size!` | `Co-Leader or Leader` |
| `Rename` |`Rename your faction! [Has to be purchased in the Perk Shop]` | `Co-Leader or Leader` |
| `Transfer` |`Transfers leader/ownership of the faction to another player! [REQUIRES CONFIRMATION]` | `Leader` |
| `Disband` |`Deletes your faction. Permanently. [REQUIRES CONFIRMATION]` | `Leader` |

## Traditional commands include:
- /f chat
- /f allychat
- /f home
- /f who (Brings up a form.)
- /f invites (Still brings up a menu.)

### There are also admin commands found in /f admin!

| Feature | Description | Permission Node |
| --- | --- | --- |
| `Force Disband` |`Deletes a given faction. Permanently. [REQUIRES CONFIRMATION]` | `factionsui.admin.disband` |
| `Force Unclaim` |`Removes a faction claim.` | `factionsui.admin.unclaim` |
| `Toggle Chat` |`Lets admins see /f chat!` | `factionsui.admin.seechat` |
| `Strike` |`Adds a penalty strike to a faction. Once it reaces a configurable amount, it will be automatically disbanded.` | `factionsui.admin.strike' |
