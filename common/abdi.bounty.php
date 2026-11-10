{* ROTARY — bug bounty programme *}
<div class="rt-features">
  <div class="rt-features-inner">
    <div class="rt-features-row">
      <div class="rt-features-col">
        <div class="rt-features-card rt-legal">
          <div class="rt-features-hero"><img src="{U::File(['file'=>'images/bounty.png','a'=>'path'])}" title="[[CN]] Bug Bounty Program" alt="[[CN]] Bug Bounty Program" /></div>
          <div class="rt-features-body rt-prose">
            <span class="rt-eyebrow"><i class="fas fa-bug"></i> Security</span>
            <h2 class="rt-features-title">[[CN]] Bug Bounty Program</h2>
            <div class="rt-secure-note"><i class="fas fa-user-shield"></i><span><strong>For professional researchers:</strong> Bug Bounty Program</span></div>
            <p>Our team of dedicated security professionals works vigilantly to help keep customer information secure.  We recognize the important role that security researchers and our user community play in helping to keep [[CN]] and our customers secure.  If you discover a site or product vulnerability please notify us using the guidelines below.</p>
            <p><strong>Program Terms</strong></p>
            <p>Please note that your participation in the Bug Bounty Program is voluntary and subject to the terms and conditions set forth on this page (“<u>Program Terms</u>”).  By submitting a site or product vulnerability to [[CN]]. (“<u>[[CN]]</u>”) you acknowledge that you have read and agreed to these Program Terms.</p>
            <p>These Program Terms supplement the terms of [[CN]] User Agreement, the [[CN]] Acceptable Use Policy, and any other agreement in which you have entered with [[CN]] (collectively “<u>[[CN]] Agreements</u>”).  The terms of those [[CN]] Agreements will apply to your use of, and participation in, the Bug Bounty Program as if fully set forth herein.   If there is any inconsistency exists between the terms of the [[CN]] Agreements and these Program Terms, these Program Terms will control, but only with regard to the Bug Bounty Program.</p>
            <p>You can jump to particular sections of these Program Terms by using the following links : </p>
            <ol class="rt-toc">
              <li><strong><a href="#responsible-disclosure-policy">Responsible Disclosure Policy</a></strong></li>
              <li><strong><a href="#eligibility-requirements">Eligibility Requirements</a></strong></li>
              <li><strong><a href="#bug-submission">Bug Submission Requirements and Guidelines</a></strong></li>
              <li><strong><a href="#ownership-submissions">Ownership of Submissions</a></strong></li>
              <li><strong><a href="#eligible-domains">Eligible Domains</a></strong></li>
              <li><strong><a href="#out-of-scope">Out-of-Scope Vulnerabilities</a></strong></li>
              <li><strong><a href="#bounty-payments">Bounty Payments</a></strong></li>
              <li><strong><a href="#termination">Termination</a></strong></li>
              <li><strong><a href="#confidentiality">Confidentiality</a></strong></li>
              <li><strong><a href="#indemnification">Indemnification</a></strong></li>
              <li><strong><a href="#changes-to-program-terms">Changes to Program Terms</a></strong></li>
              <li><strong><a href="#bounty-faqs">Frequently Asked Questions (FAQ)</a></strong></li>
            </ol>
            <h3 id="responsible-disclosure-policy" class="rt-legal-h">Responsible Disclosure Policy</h3>
            <p>To encourage responsible disclosures, [[CN]] commits that, if we conclude, in our sole discretion, that a disclosure respects and meets all the guidelines of these Program Terms and the [[CN]] Agreements, [[CN]] will not bring a private action against you or refer a matter for public inquiry.</p>
            <h3 id="eligibility-requirements" class="rt-legal-h">Eligibility Requirements</h3>
            <p>To participate in the Bug Bounty Program, you must have a <strong> [[CN]] account in good standing</strong> in order to register for the Bug Bounty Program and be eligible to receive Bounty Payments (described further below).  Alternatively, if you do not have a [[CN]] account, you may elect to submit reports via email, but you won’t be eligible for a Bounty Payment.  If you do not currently have a [[CN]] account, you can sign up for one <a href="/account/">here</a>.</p>
            <p>To be eligible for the Bug Bounty Program, you <strong>must not:</strong></p>
            <ul>
              <li>Be a resident of, or make your Submission from, a country against which the United States has issued export sanctions or other trade restrictions (e.g., Cuba, Iran, North Korea, Sudan and Syria);</li>
              <li>Be in violation of any national, state, or local law or regulation;</li>
              <li>Be employed by [[CN]] or its subsidiaries;</li>
              <li>Be an immediate family member of a person employed by [[CN]] or its subsidiaries or affiliates; or</li>
              <li>Be less than 14 years of age. If you are at least 14 years old, but are considered a minor in your place of residence, you must get your parent’s or legal guardian’s permission prior to participating in the program.</li>
            </ul>
            <p>If [[CN]] discovers that you do not meet any of the criteria above, [[CN]] will remove you from the Bug Bounty Program and disqualify you from receiving any bounty payments.  Any submissions you make to [[CN]], whether via your Bug Bounty Program account or via email shall be considered “Submission(s)” for purposes of these Program Terms.</p>
            <h3 id="bug-submission" class="rt-legal-h">Bug Submission Requirements and Guidelines</h3>
            <p>In researching vulnerabilities on [[CN]]’s sites, you <strong>may not</strong> engage in testing that (i) results in a degradation of [[CN]] systems, (ii) results in you, or any third party, accessing, storing, sharing or destroying [[CN]] or customer data, or (iii) may impact [[CN]] customers, such as denial of service, social engineering or spam.</p>
            <p>You <strong>may not</strong> publicly disclose your findings or the contents of your Submission in any way without [[CN]]’s prior written approval.</p>
            <p>Failure to follow these guidelines will result in immediate disqualification from the Bug Bounty Program and ineligibility for receiving any bounty payments.</p>
            <p><strong>For all submissions, please include:</strong></p>
            <ul>
              <li>Full description of the vulnerability being reported including the exploitability and impact</li>
              <li>Document all steps required to reproduce the exploit of the vulnerability</li>
              <li><strong>Provide all:</strong>
                <ul>
                  <li>URL(s)/application(s) affected in the submission (even if you provided us a code snippetvideo as well)</li>
                  <li>IPs that were used while testing</li>
                  <li>Always include the user ID that is used for the POC</li>
                  <li>Always include all of the files that you attempted to uploaded</li>
                  <li>Provide the complete PoC for your submission 	(e.g. For RCE’s do not change files, upload only “hello world” test files, etc.)</li>
                  <li>Please save all the attack logs and attach them to the submission.</li>
                  <li>Remote Code Execution (RCE) <a href="#rce-submission-guidelines" id="submission-guidelines">Submission Guidelines</a></li>
                </ul>
              </li>
              <li>Failure to include any of the above items may delay or jeopardize the bounty payment.</li>
            </ul>
            <h3 id="ownership-submissions" class="rt-legal-h">Ownership of Submissions</h3>
            <p>As between [[CN]] and you, as a condition of participation in the [[CN]] Bug Bounty Program, you hereby grant [[CN]], its subsidiaries, affiliates and customers a perpetual, irrevocable, worldwide, royalty-free, transferrable, sublicensable (through multiple tiers) and non-exclusive license to use, reproduce, adapt, modify, publish, distribute, publicly perform, create derivative work from, make, use, sell, offer for sale and import the Submission, as well as any materials submitted to [[CN]] in connection therewith, for any purpose.  You should not send us any Submission that you do not wish to license to us.</p>
            <p>You hereby represent and warrant that the Submission is original to you and you own all right, title and interest in and to the Submission.  Further, you hereby waive all other claims of any nature, including express contract, implied-in-fact contract, or quasi-contract, arising out of any disclosure of the Submission to [[CN]].  In no event shall [[CN]] be precluded from discussing, reviewing, developing for itself, having developed, or developing for third parties, materials which are competitive with those set forth in the Submission irrespective of their similarity to the information in the Submission, so long as [[CN]] complies with the terms of participation stated herein.</p>
            <h3 id="eligible-domains" class="rt-legal-h">Eligible Domains Policy</h3>
            <p><strong>The following domains are included for the [[CN]] family of companies:</strong></p>
            <ul>
              <li>[[BASE]]</li>
              <li>[[SECUREBASE]]</li>
            </ul>
            <p><strong><u>Out-of-Scope Vulnerabilities</u></strong></p>
            <p>Certain vulnerabilities are considered out-of-scope for the Bug Bounty Program.  Those out-of-scope vulnerabilities include, but are not limited to:</p>
            <ul>
              <li>Vulnerabilities  dependent upon social engineering techniques (e.g. shoulder attack, stealing devices, phishing, fraud, stolen credentials)</li>
              <li>Host Header</li>
              <li>Denial of service (DOS)</li>
              <li>Self-XSS (User defined payload)</li>
              <li>Login/logout CSRF</li>
              <li>Content spoofing without embedded links/HTML</li>
              <li>Vulnerabilities which require a jailbroken mobile device</li>
              <li>Infrastructure vulnerabilities, including:
                <ul>
                  <li>Certificates/TLS/SSL related issues</li>
                  <li>DNS issues (i.e. mx records, SPF records, etc.)</li>
                  <li>Server configuration issues (i.e., open ports, TLS, etc.)</li>
                </ul>
              </li>
              <li>Most vulnerabilities within our sandbox, lab, or staging environments.</li>
              <li>Outdated web browsers: vulnerabilities contingent upon outdated or unpatched browsers will not be honored, including Internet Explorer versions prior to version 8</li>
              <li>Vulnerabilities involving active content such as web browser add-ons</li>
              <li>Information disclosure of public or information that does not present risk to our [[CN]] customers or [[CN]] (i.e. web server type disclosure)</li>
              <li>Most <strong>Connected Commerce Cloud (C3)</strong> submissions are out of scope
                <ul>
                  <li>We will review C3 submissions and depending upon the level of risk we will determine if this submission will be eligible</li>
                </ul>
              </li>
            </ul>
            <h3 id="bounty-payments" class="rt-legal-h">Bounty Payments</h3>
            <p>You may be eligible to receive a monetary reward, or “bounty,” if: (i) you are the first person to submit a site or product vulnerability; (ii) that vulnerability is determined to by a valid security issue by [[CN]]’s security team; and (iii) you have complied with all Program Terms. </p>
            <p><strong>Bounty payments, if any, will be determined by [[CN]], in [[CN]]’s sole discretion.  In no event shall [[CN]] be obligated to pay you a bounty for any Submission.  All bounty payments shall be considered gratuitous. </strong></p>
            <p>In the event [[CN]] elects to pay you a bounty, [[CN]] may make a partial payment when the vulnerability is first verified by [[CN]] and then an additional payment once the vulnerability has been fixed.  The format and timing of all bounty payments shall be determined in [[CN]]’s sole discretion.</p>
            <p><strong>All bounty payments must be made to a  [[CN]] Account in good standing.</strong> If you do not have a  [[CN]] Account in good standing at the time of payment, you will not be eligible to receive a bounty (except in extraordinary circumstances agreed to by [[CN]] via email from the Bug Bounty Program team). </p>
            <p>All bounty payments will be made in United States dollars (USD).  You will be responsible for any tax implications related to bounty payments you receive, as determined by the laws of your jurisdiction of residence or citizenship.</p>
            <p>[[CN]]  will determine all bounty payout based on the risk and impact of the vulnerability. The minimum bounty amount for a validated bug submission is $1 USD and the maximum bounty for a validated bug submission is $100 USD.</p>
            <p>[[CN]]  Bug Bounty Team retains the right to determine if the bug submitted to the Bug Bounty Program is eligible. All determinations as to the amount of a bounty made by the [[CN]] Bug Bounty Team are final.</p>
            <p><strong><u>Additional Terms </u></strong></p>
            <p><em>+Payout ranges are based on the classification and sensitivity of the data impacted, ease of exploit and overall risk to [[CN]] customers, [[CN]] brand and determined to be a valid security issue by [[CN]]’s security engineers. Common sensitive data elements include customer social security number, credit card number, card verification code, bank account number, login credentials and passwords.  [[CN]] may pay beyond the range at times when bugs are found to have significant risk.</em></p>
            <p><em>#Please note that Clickjacking and CSRF vulnerabilities are only reviewed for sites and pages where the ease of exploit and risk to [[CN]] is significant. Also, please note that, while "Logout CSRF" is a well-acknowledged issue, there are other techniques (like "cookie forcing" and "cookie bombardment") that can make it futile to defend against this attack. Also, [[CN]] web sessions are relatively short lived and hence, the [[CN]] will not consider reports of the ability to log out users from [[CN]] as qualifying for a bounty.</em></p>
            <h3 id="wall-of-fame" class="rt-legal-h">Wall of Fame</h3>
            <p>In an effort to provide recognition to research partners, from time to time [[CN]] may feature persons who have made significant contributions.  Where selected, and upon mutual written agreement regarding acceptable attribution (email being sufficient), you hereby grant [[CN]] the right to display the display name and/or attribution information on [[CN]]’s Wall of Fame and such other media as [[CN]] desires to publish. Either party may elect to no longer participate or publish contribution information.  [[CN]] has the right to remove contribution information of any person that at any time does not comply with the Program Terms or the terms of User Agreement.</p>
            <h3 id="termination" class="rt-legal-h">Termination</h3>
            <p>In the event (i) you breach any of these Program Terms or the terms and conditions of the [[CN]] Agreements; or (ii) [[CN]] determines, in its sole discretion that your continued participation in the Bug Bounty Program could adversely impact [[CN]] (including, but not limited to, presenting any threat to [[CN]]’s systems, security, finances and/or reputation) [[CN]] may immediately terminate your participation in the Bug Bounty Program and disqualify you from receiving any bounty payments. Please see our recommendations on the proper <a href="#aware-testing" id="test-procedures">procedures for testing</a> our applications.</p>
            <h3 id="confidentiality" class="rt-legal-h">Confidentiality</h3>
            <p>Any information you receive or collect about [[CN]] or any [[CN]] user through the Bug Bounty Program (“Confidential Information”) must be kept confidential and only used in connection with the Bug Bounty Program.  You may not use, disclose or distribute any such Confidential Information, including, but not limited to, any information regarding your Submission and information you obtain when researching the [[CN]] sites, without [[CN]]’s prior written consent..</p>
            <h3 id="indemnification" class="rt-legal-h">Indemnification</h3>
            <p>In addition to any indemnification obligations you may have under the [[CN]] Agreements, you agree to defend, indemnify and hold [[CN]], its subsidiaries, affiliates and the officers, directors, agents, joint ventures, employees and suppliers of [[CN]], its subsidiaries, or our affiliates, harmless from any claim or demand (including attorneys’ fees) made or incurred by any third party due to or arising out of your Submissions, your breach of these Program Terms and/or your improper use of the Bug Bounty Program.</p>
            <h3 id="changes-to-program-terms" class="rt-legal-h">Changes to Program Terms</h3>
            <p>The Bug Bounty Program, including its policies, is subject to change or cancellation by [[CN]] at any time, without notice.  As such, [[CN]] may amend these Program Terms and/or its policies at any time by posting a revised version on our website.  By continuing to participate in the Bug Bounty Program after [[CN]] posts any such changes, you accept the Program Terms, as modified.</p>
            <h3 id="bounty-faqs" class="rt-legal-h">Frequently Asked Questions</h3>
            <p><strong>What constitutes a valid bug submission?</strong></p>
            <p><span class="bounty-faq-content">The bug must be in scope of our program sites, within a category of vulnerabilities that are within program scope, and found to be a valid security issue by our security engineers. Your submission must be the first of its kind as duplicate submissions will be invalid.</span></p>
            <p><strong>What is considered within the payout range of bounties?</strong></p>
            <p><span class="bounty-faq-content">Payout ranges are based on the classification of the data impacted, ease of exploit and overall risk to [[CN]] customers and the [[CN]] brand. We may pay beyond the range at times when bugs are found to have significant risk.  The amount of all bounty payments, if any, will be determined by [[CN]], in [[CN]]’s sole discretion.</span></p>
            <p><strong>Is my bug fixed? Where is my payout?</strong></p>
            <p><span class="bounty-faq-content">If you have reviewed your bug and believe it is fixed, please contact us and let us know. We will review your bug and verify if it is fixed. When your bug is fixed, your final bounty will be submitted and you will receive an email notification.</span></p>
            <p><strong>Why was my bug submission found to be a duplicate?</strong></p>
            <p><span class="bounty-faq-content">If the bug you have reported was already submitted by another researcher and found to be valid, we will not be able to honor similar bug submissions following that. We have had great participation from our research community. The growing volume of researchers will many times lead to duplicate bug findings. We must honor the first submission of its type and reject subsequent submissions.</span></p>
            <p><strong>What types of bugs are typically awarded on the high range of bounties?</strong></p>
            <p><span class="bounty-faq-content">Besides the category of bug and the risk it presents, the type of information exposed is important when determining the severity. Confidential or restricted customer personal identifiable information (PII) exposed as well as the content sensitivity of the page are factors that can facilitate a higher bounty payout.</span></p>
            <p><strong>What types of bugs are commonly rejected?</strong></p>
            <p><span class="bounty-faq-content">Bugs that present negligible to no impact to our customers or company. Common examples include: </span></p>
            <ul>
              <li>Error messages void of sensitive data</li>
              <li>Web server type disclosure</li>
              <li>Clickjacking on pages without sensitive content, authentication, or state changing actions</li>
              <li>Self-XSS scenarios that would require additional user interaction, including the user manually inputting the XSS payload.</li>
              <li>Most vulnerabilities within our sandbox, lab or staging environments. Domains utilized by customers take precedence</li>
            </ul>
            <p><strong>What should I be aware of when testing?</strong></p>
            <ul>
              <li>Please be aware of all program criteria and scope, as well as the Program Terms.</li>
              <li>Do not engage in testing that can impact our customers, like denial of service, social engineering or spam.</li>
              <li>When utilizing personal or test accounts, they are subject to our fraud controls and filters and may act upon irregular activity.</li>
              <li>A proof of concept consisting of detailed steps or screen shots is helpful in facilitation of review and eventual fix.</li>
            </ul>
            <p><strong>Will any of my previously filed bugs be lost if I create a new Bug Bounty account using [[CN]] login?</strong></p>
            <p><span class="bounty-faq-content">We want to assure you that none of the account history will be lost. You will continue to get notifications to your email for any status changes on previously filed bugs. If you need additional information concerning any open issues filed through the old portal, please contact us with the correct EIBBP number.</span></p>
            <p><span id="rce-submission-guidelines"></span>Remote Code Execution (RCE) Submission Guidelines</p>
            <p><strong>Scope:</strong></p>
            <p>Vulnerabilities which allow execution of code on the application server or shell commands on the server itself.</p>
            <p><strong>Minimal information collected from vulnerable server required for RCE submissions:</strong></p>
            <ol>
              <li>Server internal IP(s)<br>
              </li>
              <li>Server internal Hostname<br>
              </li>
              <li>User name executing code<br>
              </li>
              <li>Any and all of [[CN]] or it's costumer's data you were exposed to while conducting the research. Including and not limited to: credentials, source code, log data, transaction data or records, etc.<br>
              </li>
              <li>If uploading files to the server is directly required by the exploit. The file must include an identifying phrase in either the content or the filename including the researchers name or identifier and the phrase "[[CN]]-BugBounty". The files name and location on the server must be submitted in the report </li>
            </ol>
            <p><strong>Minimal Information about exploit required for RCE submissions:</strong></p>
            <ol>
              <li>Timestamps of all activities<br>
              </li>
              <li>Source IP<br>
              </li>
              <li>Exploit code<br>
              </li>
              <li>Call back IP, domain, Ports and Full URL (if a callback was used)<br>
              </li>
              <li>Full request and response data for exploitation attempts</li>
            </ol>
            <p><strong>Prohibited actions when conduction RCE attempts:</strong></p>
            <ol>
              <li>Altering or uploading files on the web server unless directly required by the exploit.<br>
              </li>
              <li>Altering file permissions.<br>
              </li>
              <li>Reading sensitive credential files on the system (e.g. /etc/shadow)<br>
              </li>
              <li>Interacting with or altering data stored on the server or other servers it interacts with (e.g. databases)<br>
              </li>
              <li>Modifying or altering log files on the server.<br>
              </li>
              <li>Interrupting the normal operation of the server (e.g. restarting services, changing configuration).<br>
              </li>
              <li>Intentionally attempting to access or read [[CN]] or it's costumer's data beyond information necessary for reporting the vulnerability. Including and not limited to: credentials, source code, log data, transaction data or records, etc.<br>
              </li>
              <li>Any type of persistent connection mechanism (e.g. netcat listener, ssh reverse tunnel, etc) are prohibited.</li>
            </ol>
            <p><strong>Specific Examples</strong></p>
            <p>Required actions:</p>
            <ol>
              <li>Executing the commands 'ifconfig', 'hostname' or 'whoami'<br>
              </li>
              <li>Uploading a file named 'BugBounty.php' to the web servers working directory containing a comment with the submitters name and the content <!--?php $output&nbsp;=&nbsp;shell_exec('ifconfig'); echo "$output";?--> </li>
            </ol>
            <p><strong>Allowed actions:</strong></p>
            <ol>
              <li>Reading the content of the '/etc/passwd' file<br>
              </li>
              <li>Executing code to connect back to a submitter's controlled server and report the internal IP and hostname of the server. </li>
            </ol>
            <p><strong>Prohibited actions:</strong></p>
            <ol>
              <li>Uploading a 'web shell' to the web servers working directory enabling arbitrary command execution<br>
              </li>
              <li>Shutting down the server.<br>
              </li>
              <li>Reading the content of '/etc/shadow'.<br>
              </li>
              <li>Executing queries on a database.<br>
              </li>
              <li>Deleting files.</li>
            </ol>
            <p><b>Do's and Don'ts</b></p>
            <ol>
              <li>Do - Provide a detailed description of the vulnerability being reported</li>
              <li> Do - Define the Risk (Impact x Exploitability) of the vulnerability</li>
              <li> Do - Provide all URL(s)/application(s) affected</li>
              <li> Do - Provide all steps required to reproduce the exploit and the vulnerability</li>
              <li>Do - Provide PoC video or screenshots with your submission</li>
              <li> Do - Always include the user ID that is used for the PoC</li>
              <li>Do – Submit end to end POC</li>
              <li> Do - Always include all of the files that you attempted to uploaded</li>
              <li>Do - Provide all IPs that were used while testing (especially important for things like RCE where another team will need this to investigate)</li>
              <li> Do – Submit all pieces to an attack as they are required for validation</li>
              <li>Do - Include the main domain (Example: XSS on [[BASE]])</li>
              <li>Don't - Complete PoC’s that will cause harm to [[CN]] or our customers (i.e. Denial of service, tampering with sensitive data, etc.)</li>
              <li> Don't - Scan with an active scanner like Qualys, Nessus, Tripwire, or Burp Suite (active, passive is okay)</li>
              <li>Don't - Disclose information publicly prior to receiving the Bug Bounty team’s permission including if the vulnerability has been fixed</li>
              <li> Don't - Save proof of concept information in publicly available sources (i.e. Public YouTube videos, imgur links, or anything else someone can view without authentication)</li>
              <li>Don't – Submit the only the beginning piece of an attack and assume that it will work.</li>
              <li> Don't - Submit the same vulnerability twice instead of asking the status of the original</li>
              <li> Don't - Resubmit the same vulnerabilities again after they have been found to be not actionable due to low risk</li>
              <li> Don't - Group vulnerabilities into one single ticket that have different distinct remediation efforts</li>
              <li> Don't - Submit bugs that Don't affect the latest version of modern browsers (Chrome, Firefox, Safari), and Bugs related to browser extensions are also out of scope.</li>
            </ol>
            <p>If you have [[CN]] account issues, please contact customer service.  The [[CN]] Bug Bounty Team does not have visibility into your [[CN]] account and therefore cannot assist with such issues.</p>
            <p>If you have located a vulnerability and would like to submit it for our review, you may register and submit your bug details <a href="{$securebase}/welcome.php?dad=info&jc=support" target="_blank" rel="nofollow noopener noreferrer">here</a>!</p>
            </p>
            <div class="rt-features-foot">
              <ul class="rt-features-actions">
                <li> <a href="/contacts/" rel="nofollow noopener noreferrer" class="btn rt-btn-primary">Contact Us</a> </li>
              </ul>
              <div class="rt-features-meta"> <i class="far fa-calendar-alt"></i> <a href="{$link.rc}" rel="nofollow noopener noreferrer">Jan 28, 2019</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
